<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 17-06-04
 * Time: 14:38
 */

namespace Theme\Controllers;
use Theme\Models\Page;
use Theme\Models\Post;

class PageController extends MainController
{

	public function index()
	{
        $domain = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
	    $args = [
	        'post_type' => 'acquisition',
            'meta_query'	=> [
                [
                    'key'	 	=> 'acquisition_domain',
                    'value'	  	=> $domain,
                    'compare' 	=> 'LIKE',
                ],
            ]
        ];

        $query = new \WP_Query($args);
        $acquisition = $query->post_count > 0 ? $query->posts[0] : false;

		return view('pages.page', [
		    'acquisition' => $acquisition,
        ]);
	}

    public function publication()
    {
        return view('pages.publication-single', [
            'post' => the_post(),
            'suggested' => \Theme\Models\Post::get_3_suggested(get_the_ID()),
        ]);
    }

    public function publication_list()
    {
        $posts = Post::get_posts();
        return view('pages.publication-list', [
            'posts' => $posts['posts'],
            'count' => $posts['count'],
        ]);
    }

    public function page_2_1()
    {
        return view('pages.page_2_1',[]);
    }

    public function page_2_2()
    {
        return view('pages.page_2_2',[]);
    }

    public function page_2_3()
    {
        return view('pages.page_2_3',[]);
    }

    public function page_3_0()
    {
        return view('pages.page_3_0',[]);
    }

}