<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 17-06-04
 * Time: 14:38
 */

namespace Theme\Controllers;
use Theme\Models\Page;

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
        return view('pages.publication-list',[]);
    }

    public function job_offer()
    {
	    return view('partials.components.job-offer.lightbox',[]);
    }



}