<?php

namespace App\Http\Controllers;

use View;

class ComponentController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | ComponentController
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
     * Show the grid system page screen to the user.
     *
     * @return Response
     */
    public function gridSystem() {

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
        View::share('title', 'GRID SYSTEM  | BLANKON - Fullpack Admin Theme');

        return view('component/grid-system');
    }

    /**
     * Show the buttons page screen to the user.
     *
     * @return Response
     */
    public function buttons() {

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
        View::share('title', 'BUTTONS  | BLANKON - Fullpack Admin Theme');

        return view('component/buttons');
    }

    /**
     * Show the typography page screen to the user.
     *
     * @return Response
     */
    public function typography() {

        //  page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/google-code-prettify/bin/prettify.min.css';

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/custom.css',
        ];

        //  page level plugins
        $this->js['plugins'][] = 'global/plugins/bower_components/google-code-prettify/bin/prettify.min.js';

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.typography.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'TYPOGRAPHY  | BLANKON - Fullpack Admin Theme');

        return view('component/typography');
    }

    /**
     * Show the panel page screen to the user.
     *
     * @return Response
     */
    public function panel() {

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
        View::share('title', 'PANELS  | BLANKON - Fullpack Admin Theme');

        return view('component/panel');
    }

    /**
     * Show the alert page screen to the user.
     *
     * @return Response
     */
    public function alerts() {

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
        View::share('title', 'ALERTS  | BLANKON - Fullpack Admin Theme');

        return view('component/alerts');
    }

    /**
     * Show the modals page screen to the user.
     *
     * @return Response
     */
    public function modals() {

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
        View::share('title', 'MODALS  | BLANKON - Fullpack Admin Theme');

        return view('component/modals');
    }

    /**
     * Show the video page screen to the user.
     *
     * @return Response
     */
    public function video() {

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
        View::share('title', 'VIDEO  | BLANKON - Fullpack Admin Theme');

        return view('component/video');
    }

    /**
     * Show the tab & accordion page screen to the user.
     *
     * @return Response
     */
    public function tabsaccordion() {

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
        View::share('title', 'TABS & ACCORDION  | BLANKON - Fullpack Admin Theme');

        return view('component/tabsaccordion');
    }

    /**
     * Show the sliders page screen to the user.
     *
     * @return Response
     */
    public function sliders() {

        //  page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/ion.rangeSlider/css/ion.rangeSlider.css';
        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/custom.css',
        ];

        //  page level plugins
        $this->js['plugins'][] = 'global/plugins/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js';

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.slider.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'SLIDERS  | BLANKON - Fullpack Admin Theme');

        return view('component/sliders');
    }

    /**
     * Show the glyphicons page screen to the user.
     *
     * @return Response
     */
    public function glyphicons() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/glyphicons.css',
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
        View::share('title', 'GLYPHICONS  | BLANKON - Fullpack Admin Theme');

        return view('component/glyphicons');
    }

    /**
     * Show the glyphicons pro page screen to the user.
     *
     * @return Response
     */
    public function glyphiconsPro() {
        
        //  page level styles
        $this->css['pages'][] = 'commercial/plugins/glyphicons/web/html_css/css/glyphicons.css';
        
        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/glyphicons.css',
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
        View::share('title', 'GLYPHICONS PRO | BLANKON - Fullpack Admin Theme');

        return view('component/glyphicons-pro');
    }

    /**
     * Show the font awesome page screen to the user.
     *
     * @return Response
     */
    public function fontAwesome() {

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
        View::share('title', 'FONT AWESOME | BLANKON - Fullpack Admin Theme');

        return view('component/font-awesome');
    }

    /**
     * Show the weather icons page screen to the user.
     *
     * @return Response
     */
    public function weatherIcons() {

        //  page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/weather-icons/css/weather-icons.min.css';

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/weather-icons.css',
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
        View::share('title', 'WEATHER ICONS | BLANKON - Fullpack Admin Theme');

        return view('component/weather-icons');
    }

    /**
     * Show the map icons page screen to the user.
     *
     * @return Response
     */
    public function mapIcons() {

        // page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/map-icons/css/map-icons.css';

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/custom.css',
        ];

        //  page level plugins
        $this->js['additionalScripts'] = [
            'http://maps.googleapis.com/maps/api/js?sensor=false'
        ];

        $this->js['plugins'] = [
            'global/plugins/bower_components/map-icons/js/map-icons.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.maps.icon.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'MAP ICONS | BLANKON - Fullpack Admin Theme');

        return view('component/map-icons');
    }

    /**
     * Show the simple line icons page screen to the user.
     *
     * @return Response
     */
    public function simpleLineIcons() {

        //  page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/simple-line-icons/css/simple-line-icons.css';

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/icon.css',
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
        View::share('title', 'SIMPLE LINE ICONS | BLANKON - Fullpack Admin Theme');

        return view('component/simple-line-icons');
    }

    /**
     * Show the other page screen to the user.
     *
     * @return Response
     */
    public function other() {

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
        View::share('title', 'OTHER ICONS | BLANKON - Fullpack Admin Theme');

        return view('component/other');
    }

}
