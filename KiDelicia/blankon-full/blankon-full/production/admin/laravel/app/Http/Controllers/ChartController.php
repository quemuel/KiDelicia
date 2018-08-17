<?php

namespace App\Http\Controllers;

use View;

class ChartController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | ChartController
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
     * Show the flot chart screen to the user.
     *
     * @return Response
     */
    public function flot() {

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
            'global/plugins/bower_components/flot/jquery.flot.js',
            'global/plugins/bower_components/flot/jquery.flot.spline.min.js',
            'global/plugins/bower_components/flot/jquery.flot.tooltip.min.js',
            'global/plugins/bower_components/flot/jquery.flot.resize.js',
            'global/plugins/bower_components/flot/jquery.flot.categories.js',
            'global/plugins/bower_components/flot/jquery.flot.pie.js',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.chart.flot.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FLOT CHARTS  | BLANKON - Fullpack Admin Theme');

        return view('chart/flot');
    }
    
    /**
     * Show the morris chart screen to the user.
     *
     * @return Response
     */
    public function morris() {

        // page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/morrisjs/morris.css';
        
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
            'global/plugins/bower_components/raphael/raphael-min.js',
            'global/plugins/bower_components/morrisjs/morris.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.chart.morris.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'MORRIS CHARTS  | BLANKON - Fullpack Admin Theme');

        return view('chart/morris');
    }

    /**
     * Show the chartjs chart screen to the user.
     *
     * @return Response
     */
    public function chartjs() {

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
        $this->js['plugins'] = ['global/plugins/bower_components/chartjs/Chart.min.js'];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.chart.chartjs.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'CHARTJS CHARTS  | BLANKON - Fullpack Admin Theme');

        return view('chart/chartjs');
    }

    /**
     * Show the c3js chart screen to the user.
     *
     * @return Response
     */
    public function c3js() {

        // page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/c3js-chart/c3.min.css';
        
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
        $this->js['plugins'] = ['global/plugins/bower_components/d3/d3.min.js',
            'global/plugins/bower_components/c3js-chart/c3.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.chart.c3.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'C3JS CHARTS  | BLANKON - Fullpack Admin Theme');

        return view('chart/c3js');
    }

}
