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
        Asset::add('select2-css', '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css', false, '4.0.3', true);
        Asset::add('select2-js', '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js', ['jquery'], '4.0.3', false);

        Asset::add('charts-js', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js', ['jquery'], '2.5.0', false);
        /* Asset::add('doughnut-chart',  themosis_assets() . '/js/doughnut-chart.js', ['charts-js'], '', false); */
    }



}



