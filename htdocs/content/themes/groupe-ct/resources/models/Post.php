<?php

namespace Theme\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post.
 * Help you retrieve data from your $prefix_posts table.
 *
 * @package Theme\Models
 */
class Post extends Model
{

    public static function get_features()
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
}
