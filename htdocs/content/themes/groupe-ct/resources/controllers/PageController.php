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
		return view('pages.page',[]);
	}

    public function publication()
    {
        return view('pages.publication-single',[]);
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

}