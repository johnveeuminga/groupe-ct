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




}