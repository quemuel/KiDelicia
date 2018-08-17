<?php

namespace App\Http\Controllers;

use View;

class DashboardController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | DashboardController
      |--------------------------------------------------------------------------
     */

    public function __construct() {
        
        parent::__construct();
        
        $this->setApp();

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'global/plugins/bower_components/dropzone/downloads/css/dropzone.css',
            'global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css'
        ];

        // page level plugins
        $this->js['plugins'] = [];
    }

    /**
     * Show the application dashboard screen to the user.
     *
     * @return Response
     */
    public function index() {

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
            'global/plugins/bower_components/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js',
            'global/plugins/bower_components/flot/jquery.flot.js',
            'global/plugins/bower_components/flot/jquery.flot.spline.min.js',
            'global/plugins/bower_components/flot/jquery.flot.categories.js',
            'global/plugins/bower_components/flot/jquery.flot.tooltip.min.js',
            'global/plugins/bower_components/flot/jquery.flot.resize.js',
            'global/plugins/bower_components/flot/jquery.flot.pie.js',
            'global/plugins/bower_components/dropzone/downloads/dropzone.min.js',
            'global/plugins/bower_components/jquery.gritter/js/jquery.gritter.min.js',
            'global/plugins/bower_components/skycons-html5/skycons.js'
        ];
        
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.dashboard.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'DASHBOARD | BLANKON - Fullpack Admin Theme');
        
        return view('dashboard/index');
    }

    /**
     * Show the frontend screen to the user.
     *
     * @return Response
     */
    public function frontend() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/frontend-themes.css',
            'admin/css/custom.css',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FRONTEND | BLANKON - Fullpack Admin Theme');
        
        return view('dashboard/frontend');
    }

    /**
     * Show the versions screen to the user.
     *
     * @return Response
     */
    public function version() {
        
        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/custom.css',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'VERSIONS | BLANKON - Fullpack Admin Theme');
        
        return view('dashboard/versions');
    }

    /**
     * Show the animate.css screen to the user.
     *
     * @return Response
     */
    public function animate() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/custom.css',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.animate.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'ANIMATE.CSS | BLANKON - Fullpack Admin Theme');

        return view('dashboard/animate');
    }

}
