<?php

namespace Theme\Controllers;


class HomeController  extends MainController
{

    public function index()
    {

        return view('pages.home',[

        ]);
    }


}