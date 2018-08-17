<?php

namespace App\Http\Controllers;

use View;

class BlogController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | DashboardController
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
     * Show the blog grid screen to the user.
     *
     * @return Response
     */
    public function grid() {

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
            'global/plugins/bower_components/masonry/dist/masonry.pkgd.min.js',
        ];
        
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.blog.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'BLOG GRID | BLANKON - Fullpack Admin Theme');
        
        return view('blog/grid');
    }

    /**
     * Show the blog list screen to the user.
     *
     * @return Response
     */
    public function getList() {

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
        View::share('title', 'BLOG LIST | BLANKON - Fullpack Admin Theme');
        
        return view('blog/list');
        
    }

    /**
     * Show the single blog screen to the user.
     *
     * @return Response
     */
    public function single() {
        
        // page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css';

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
            'global/plugins/bower_components/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
            'global/plugins/bower_components/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.blog.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'BLOG SINGLE | BLANKON - Fullpack Admin Theme');
        
        return view('blog/single');
    }

}
