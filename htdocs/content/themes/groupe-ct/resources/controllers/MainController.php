<?php

namespace Theme\Controllers;

use Themosis\Facades\Asset;
use Themosis\Route\BaseController;


class MainController extends BaseController
{


    public function __construct()
    {
        Asset::add('jquery', '//code.jquery.com/jquery-3.1.1.min.js', '3.1.1', true);
        Asset::add('screen-css', themosis_assets() . '/css/screen.min.css');

        Asset::add('theme-js',  themosis_assets() . '/js/theme.min.js', ['jquery'], '', false);
        //Asset::add('flexgrid-css', themosis_assets() . '/css/flexboxgrid.css', ['screen-css'], '1.0', false);
        Asset::add('flexgrid', '//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css', ['screen-css'], '1.0', true);
        Asset::add('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', true);
        Asset::add('charts-js', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js', false, '2.5.0', true);

    }



}



