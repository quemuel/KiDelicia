<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maps extends CI_Controller {

    public function map_google()
    {
        // Set title page
        $this->smartyci->assign('title', 'GOOGLE MAP');

        // Set JS CDN
        $js_cdn = array(
            'http://maps.googleapis.com/maps/api/js?sensor=false'
        );
        $this->smartyci->assign('list_js_cdn',$js_cdn);

        // Set JS plguin
        $js_plugin = array(
            'gmap3/dist/gmap3.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.maps.google.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/maps/google.html');

        // Set active menu
        $this->smartyci->assign('active_maps', 'active');
        $this->smartyci->assign('active_map_google', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function map_vector()
    {
        // Set title page
        $this->smartyci->assign('title', 'VECTOR MAP');

        // Set CSS plugin
        $css_plugin = array(
            'jqvmap/jqvmap.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plguin
        $js_plugin = array(
            'jqvmap/jquery.vmap.min.js',
            'jqvmap/maps/jquery.vmap.world.js',
            'jqvmap/maps/jquery.vmap.usa.js',
            'jqvmap/maps/jquery.vmap.russia.js',
            'jqvmap/maps/jquery.vmap.algeria.js',
            'jqvmap/maps/jquery.vmap.germany.js',
            'jqvmap/maps/continents/jquery.vmap.africa.js',
            'jqvmap/maps/continents/jquery.vmap.asia.js',
            'jqvmap/maps/continents/jquery.vmap.australia.js',
            'jqvmap/maps/continents/jquery.vmap.europe.js',
            'jqvmap/maps/continents/jquery.vmap.north-america.js',
            'jqvmap/maps/continents/jquery.vmap.south-america.js',
            'jqvmap/data/jquery.vmap.sampledata.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.maps.vector.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/maps/vector.html');

        // Set active menu
        $this->smartyci->assign('active_maps', 'active');
        $this->smartyci->assign('active_map_vector', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

}
