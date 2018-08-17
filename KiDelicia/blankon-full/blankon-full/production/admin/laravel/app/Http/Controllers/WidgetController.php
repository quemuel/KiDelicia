<?php

namespace App\Http\Controllers;

use View;

class WidgetController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | WidgetController
      |--------------------------------------------------------------------------
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
     * Show the widget overview screen to the user.
     *
     * @return Response
     */
    public function overview() {

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
        $this->js['plugins'] = ['global/plugins/bower_components/raphael/raphael-min.js',
            'global/plugins/bower_components/flot/jquery.flot.js',
            'global/plugins/bower_components/flot/jquery.flot.spline.min.js',
            'global/plugins/bower_components/flot/jquery.flot.categories.js',
            'global/plugins/bower_components/flot/jquery.flot.tooltip.min.js',
            'global/plugins/bower_components/flot/jquery.flot.resize.js',
            'global/plugins/bower_components/flot/jquery.flot.pie.js',
            'global/plugins/bower_components/morrisjs/morris.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.widgets.js',
            'admin/js/demo.js'
        ];

        // pass view to variable
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'OVERVIEW WIDGET | BLANKON - Fullpack Admin Theme');
        
        return view('widget/overview');
    }

    /**
     * Show the widget social screen to the user.
     *
     * @return Response
     */
    public function social() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/timeline.css',
            'admin/css/custom.css',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/demo.js'
        ];

        // pass view to variable
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'SOCIAL WIDGET | BLANKON - Fullpack Admin Theme');
        
        return view('widget/social');
    }

    /**
     * Show the widget blog screen to the user.
     *
     * @return Response
     */
    public function blog() {

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

        // pass view to variable
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'BLOG WIDGET | BLANKON - Fullpack Admin Theme');
        
        return view('widget/blog');
    }

    /**
     * Show the widget weather screen to the user.
     *
     * @return Response
     */
    public function weather() {

        // page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/weather-icons/css/weather-icons.min.css';
        
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
        $this->js['plugins'][] = 'global/plugins/bower_components/skycons-html5/skycons.js';

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.widget.weather.js',
            'admin/js/demo.js'
        ];

        // pass view to variable
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'WHEATER WIDGET | BLANKON - Fullpack Admin Theme');
        
        return view('widget/weather');
    }

    /**
     * Show the widget misc screen to the user.
     *
     * @return Response
     */
    public function misc() {

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

        // pass view to variable
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'MISC WIDGET | BLANKON - Fullpack Admin Theme');
        
        return view('widget/misc');
    }

}
