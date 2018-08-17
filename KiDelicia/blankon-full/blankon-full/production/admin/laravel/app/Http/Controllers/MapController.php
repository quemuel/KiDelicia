<?php

namespace App\Http\Controllers;

use View;

class MapController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | MapController
      |--------------------------------------------------------------------------
      |
     */

    public function __construct() {

        parent::__construct();

        $this->setApp();

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
        ];

        // page level plugins
        $this->js['plugins'] = [];
    }

    /**
     * Show the google map screen to the user.
     *
     * @return Response
     */
    public function google() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/custom.css',
        ];

        // page level plugins
        $this->js['additionalScripts'] = [
            'http://maps.googleapis.com/maps/api/js?sensor=false'
        ];

        $this->js['plugins'] = [
            'global/plugins/bower_components/gmap3/dist/gmap3.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.maps.google.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'GOOGLE MAPS  | BLANKON - Fullpack Admin Theme');

        return view('map/google');
    }

    /**
     * Show the vector map screen to the user.
     *
     * @return Response
     */
    public function vector() {

        // page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/jqvmap/jqvmap.css';
        
        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/custom.css',
        ];

        // page level plugins
        $this->js['plugins'] = [
            'global/plugins/bower_components/jqvmap/jquery.vmap.min.js',
            'global/plugins/bower_components/jqvmap/maps/jquery.vmap.world.js',
            'global/plugins/bower_components/jqvmap/maps/jquery.vmap.usa.js',
            'global/plugins/bower_components/jqvmap/maps/jquery.vmap.russia.js',
            'global/plugins/bower_components/jqvmap/maps/jquery.vmap.algeria.js',
            'global/plugins/bower_components/jqvmap/maps/jquery.vmap.germany.js',
            'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.africa.js',
            'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.asia.js',
            'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.australia.js',
            'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.europe.js',
            'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.north-america.js',
            'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.south-america.js',
            'global/plugins/bower_components/jqvmap/data/jquery.vmap.sampledata.js',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.maps.vector.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'GOOGLE MAPS  | BLANKON - Fullpack Admin Theme');

        return view('map/vector');
    }

}
