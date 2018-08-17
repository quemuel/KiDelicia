<?php

namespace App\Http\Controllers;

use View;

class TableController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | TableController
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
     * Show the table default screen to the user.
     *
     * @return Response
     */
    public function defaults() {

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
        View::share('title', 'DEFAULT TABLE | BLANKON - Fullpack Admin Theme');

        return view('table/default');
    }

    /**
     * Show the table color screen to the user.
     *
     * @return Response
     */
    public function color() {

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
        View::share('title', 'COLOR TABLE | BLANKON - Fullpack Admin Theme');

        return view('table/color');
    }

    /**
     * Show the datatable screen to the user.
     *
     * @return Response
     */
    public function datatable() {

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'global/plugins/bower_components/datatables/css/dataTables.bootstrap.css',
            'global/plugins/bower_components/datatables/css/datatables.responsive.css',
            'global/plugins/bower_components/fuelux/dist/css/fuelux.min.css'
        ];

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
            'global/plugins/bower_components/datatables/js/jquery.dataTables.min.js',
            'global/plugins/bower_components/datatables/js/dataTables.bootstrap.js',
            'global/plugins/bower_components/datatables/js/datatables.responsive.js',
            'global/plugins/bower_components/fuelux/dist/js/fuelux.min.js'
        ];
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.table.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'DATATABLE | BLANKON - Fullpack Admin Theme');
        
        return view('table/datatable');
    }

}
