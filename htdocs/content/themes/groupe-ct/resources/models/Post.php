<?php

namespace Theme\Models;
use Themosis\Metabox\Meta;
use WP_Query;

/**
 * Class Post.
 * Help you retrieve data from your $prefix_posts table.
 *
 * @package Theme\Models
 */
class Post
{

	public static function all($hydrate = true)
	{
		return self::first(-1, $hydrate);

	}

	public static function first($nb = 1, $hydrate = true)
	{
		$query = new WP_Query([
			'post_type'         => 'post',
			'posts_per_page'    => $nb,
			'post_status'       => 'publish',
			'orderby' => 'post_title',
			'order' => 'ASC'
		]);
		$posts = $query->get_posts();
		if ($hydrate)
		{
			$posts = self::hydrate($posts);
		}
		return $posts;

	}


	public static function hydrate($posts)
	{
		foreach ($posts as $post)
		{
			$post->image = ['url' => get_the_post_thumbnail_url($post, 'full'), 'alt' => get_the_post_thumbnail_caption($post)];
			$post->category = get_category(wp_get_post_categories($post->ID)[0])->name;
			$post->excerpt = get_post_meta($post->ID, 'excerpt');
			$post->permalink = get_permalink($post->ID);
		}

		return $posts;
	}

    public static function get_featured()
    {
        $meta_query[] = array(
            'key'     => 'post_is_featured',
            'value'   => true,
        );

        $args = [
            'post_type' => 'post',
            'numberposts'	=> 2,
            'meta_query' => $meta_query,
        ];

        $query = new \WP_Query($args);

        return $query->get_posts();
    }

    public static function get_posts()
    {
        $args = [
            'post_type' => 'post',
            'numberposts'	=> 1,
        ];

        $query = new \WP_Query($args);

        return $query->get_posts();
    }
}
