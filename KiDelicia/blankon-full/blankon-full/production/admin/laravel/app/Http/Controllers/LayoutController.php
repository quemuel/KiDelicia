<?php

namespace App\Http\Controllers;

use View;

class LayoutController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | LayoutController
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
     * Show the layout blank screen to the user.
     *
     * @return Response
     */
    public function blank() {

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
        View::share('title', 'BLANK PAGE  | BLANKON - Fullpack Admin Theme');

        return view('layout/blank');
    }

    /**
     * Show the layout boxed screen to the user.
     *
     * @return Response
     */
    public function boxed() {
        
        // css class for body
        $this->bodyClass = 'page-boxed';

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
        View::share('title', 'BOXED PAGE  | BLANKON - Fullpack Admin Theme');
        View::share('bodyClass', $this->bodyClass);
        
        return view('layout/boxed');
    }

    /**
     * Show the header fixed screen to the user.
     *
     * @return Response
     */
    public function headerFixed() {

        // css class for body
        $this->bodyClass = 'page-header-fixed';

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
        View::share('title', 'BOXED PAGE  | BLANKON - Fullpack Admin Theme');
        View::share('bodyClass', $this->bodyClass);
        
        return view('layout/header-fixed');
    }

    /**
     * Show the sidebar fixed screen to the user.
     *
     * @return Response
     */
    public function sidebarFixed() {

        // css class for body
        $this->bodyClass = 'page-sidebar-fixed page-header-fixed';

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
        View::share('title', 'SIDEBAR FIXED PAGE | BLANKON - Fullpack Admin Theme');
        View::share('bodyClass', $this->bodyClass);
        
        return view('layout/sidebar-fixed');
    }

    /**
     * Show the sidebar minimize screen to the user.
     *
     * @return Response
     */
    public function sidebarMinimize() {

        // css class for body
        $this->bodyClass = 'page-sidebar-minimize';

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
        View::share('title', 'SIDEBAR MINIMIZE PAGE | BLANKON - Fullpack Admin Theme');
        View::share('bodyClass', $this->bodyClass);
        
        return view('layout/sidebar-minimize');
    }

    /**
     * Show the sidebar default screen to the user.
     *
     * @return Response
     */
    public function sidebarDefault() {

        // css class for body
        $this->bodyClass = null;

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
        View::share('title', 'SIDEBAR DEFAULT PAGE | BLANKON - Fullpack Admin Theme');
        View::share('bodyClass', $this->bodyClass);
        return view('layout/sidebar-default');
    }

    /**
     * Show the sidebar box screen to the user.
     *
     * @return Response
     */
    public function sidebarBox() {

        // css class for body
        $this->bodyClass = null;
        // sidebar class
        $this->sidebarClass = 'sidebar-box';

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
        View::share('title', 'SIDEBAR BOX PAGE | BLANKON - Fullpack Admin Theme');
        View::share('bodyClass', $this->bodyClass);
        View::share('sidebarClass', $this->sidebarClass);
        
        return view('layout/sidebar-box');
    }

    /**
     * Show the sidebar rounded screen to the user.
     *
     * @return Response
     */
    public function sidebarRounded() {

        // css class for body
        $this->bodyClass = null;
        // sidebar class
        $this->sidebarClass = 'sidebar-rounded';

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
        View::share('title', 'SIDEBAR ROUNDED PAGE | BLANKON - Fullpack Admin Theme');
        View::share('bodyClass', $this->bodyClass);
        View::share('sidebarClass', $this->sidebarClass);
        return view('layout/sidebar-rounded');
    }

    /**
     * Show the sidebar circle screen to the user.
     *
     * @return Response
     */
    public function sidebarCircle() {
        
        // css class for body
        $this->bodyClass = null;
        
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
        View::share('title', 'SIDEBAR CIRCLE PAGE | BLANKON - Fullpack Admin Theme');
        View::share('bodyClass', $this->bodyClass);
        
        return view('layout/sidebar-rounded');
    }

    /**
     * Show the footer fixed screen to the user.
     *
     * @return Response
     */
    public function footerFixed() {

        // css class for body
        $this->bodyClass = 'page-footer-fixed';
        
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
        View::share('title', 'FOOTER FIXED PAGE | BLANKON - Fullpack Admin Theme');
        View::share('bodyClass', $this->bodyClass);
        
        return view('layout/footer-fixed');
    }

}
