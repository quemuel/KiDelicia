<?php

namespace App\Http\Controllers;

use View;

class PageController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | Page Controller
      |--------------------------------------------------------------------------
      |
     */

    public function __construct() {

        parent::__construct();

        $this->setApp();

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css'
        ];

        // page level plugins
        $this->js['plugins'] = [];
    }

    /**
     * Show the gallery page screen to the user.
     *
     * @return Response
     */
    public function gallery() {

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css'
        ];

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/gallery.css',
            'admin/css/custom.css',
        ];

        // page level plugins
        $this->js['plugins'] = [
            'global/plugins/bower_components/mixitup/build/jquery.mixitup.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.gallery.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'GALLERY | BLANKON - Fullpack Admin Theme');

        return view('page/gallery');
    }

    /**
     * Show the FAQ page screen to the user.
     *
     * @return Response
     */
    public function faq() {

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'commercial/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.css'
        ];

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/codeigniter.theme.css' => ['id' => 'theme'],
            'admin/css/pages/faq.css',
            'admin/css/custom.css',
        ];

        // page level plugins
        $this->js['plugins'] = [
            'commercial/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.faq.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FAQ | BLANKON - Fullpack Admin Theme');

        return view('page/faq');
    }

    /**
     * Show the calendar page screen to the user.
     *
     * @return Response
     */
    public function calendar() {

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'global/plugins/bower_components/bootstrap-calendar/css/calendar.min.css',
            'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css'
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
            'global/plugins/bower_components/jsTimezoneDetect/jstz.min.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/nl-NL.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/fr-FR.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/de-DE.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/el-GR.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/it-IT.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/pl-PL.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/pt-BR.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/ro-RO.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/es-MX.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/es-ES.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/ru-RU.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/sv-SE.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/zh-CN.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/cs-CZ.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/ko-KR.js',
            'global/plugins/bower_components/bootstrap-calendar/js/language/id-ID.js',
            'global/plugins/bower_components/bootstrap-calendar/js/calendar.min.js',
            'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.calendar.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'CALENDAR | BLANKON - Fullpack Admin Theme');

        return view('page/calendar');
    }

    /**
     * Show the invoice page screen to the user.
     *
     * @return Response
     */
    public function invoice() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/invoice.css',
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
        View::share('title', 'INVOICE | BLANKON - Fullpack Admin Theme');

        return view('page/invoice');
    }

    /**
     * Show the messages page screen to the user.
     *
     * @return Response
     */
    public function messages() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/messages.css',
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
        View::share('title', 'MESSAGES | BLANKON - Fullpack Admin Theme');

        return view('page/messages');
    }

    /**
     * Show the timeline page screen to the user.
     *
     * @return Response
     */
    public function timeline() {

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
            'admin/js/pages/blankon.timeline.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'TIMELINES | BLANKON - Fullpack Admin Theme');

        return view('page/timeline');
    }

    /**
     * Show the profile page screen to the user.
     *
     * @return Response
     */
    public function profile() {

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
        View::share('title', 'PROFILE | BLANKON - Fullpack Admin Theme');

        return view('page/profile');
    }

    /**
     * Show the search course page screen to the user.
     *
     * @return Response
     */
    public function searchCourse() {

        // page level styles
        $this->css['pages'][] = 'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css';

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/search.css',
            'admin/css/custom.css',
        ];

        // page level plugins
        $this->js['plugins'] = ['global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js'];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.search.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'SEARCH COURSE | BLANKON - Fullpack Admin Theme');

        return view('page/search_course');
    }

    /**
     * Show the error 403 page screen to the user.
     *
     * @return Response
     */
    public function error403() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/error-page.css',
            'admin/css/custom.css',
        ];

        // core js
        $this->js['cores'] = [];
        
        // page level scripts
        $this->js['scripts'] = [
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'ERROR 403 | BLANKON - Fullpack Admin Theme');

        return view('page/error_403');
    }

    /**
     * Show the error 404 page screen to the user.
     *
     * @return Response
     */
    public function error404() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/error-page.css',
            'admin/css/custom.css',
        ];

        //  core js
        $this->js['cores'] = [];
        
        // page level scripts
        $this->js['scripts'] = [
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'ERROR 404 | BLANKON - Fullpack Admin Theme');

        return view('page/error_404');
    }

    /**
     * Show the error 500 page screen to the user.
     *
     * @return Response
     */
    public function error500() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/error-page.css',
            'admin/css/custom.css',
        ];

        //  core js
        $this->js['cores'] = [];
        
        // page level scripts
        $this->js['scripts'] = [];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'ERROR 500 | BLANKON - Fullpack Admin Theme');

        return view('page/error_500');
    }

    /**
     * Show the error 403 type 2 page screen to the user.
     *
     * @return Response
     */
    public function error403Type2() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/error-page.css',
            'admin/css/custom.css',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.layout.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'ERROR 403 | BLANKON - Fullpack Admin Theme');

        return view('page/error-403-type-2');
    }

    /**
     * Show the error 404 type 2 page screen to the user.
     *
     * @return Response
     */
    public function error404Type2() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/error-page.css',
            'admin/css/custom.css',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.layout.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'ERROR 404 | BLANKON - Fullpack Admin Theme');

        return view('page/error-404-type-2');
    }

    /**
     * Show the error 500 type 2 page screen to the user.
     *
     * @return Response
     */
    public function error500Type2() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/error-page.css',
            'admin/css/custom.css',
        ];

        // page level plugins
        $this->js['plugins'] = [];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.layout.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'ERROR 500 | BLANKON - Fullpack Admin Theme');

        return view('page/error-500-type-2');
    }

    /**
     * Show the sign in page screen to the user.
     *
     * @return Response
     */
    public function signin() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/sign.css',
            'admin/css/custom.css',
        ];

        // page level plugins
        $this->js['plugins'][] = 'global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js';

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/pages/blankon.sign.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'SIGN IN | BLANKON - Fullpack Admin Theme');

        return view('page/signin');
    }

    /**
     * Show the sign in type 2 page screen to the user.
     *
     * @return Response
     */
    public function signinType2() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/sign-type-2.css',
            'admin/css/custom.css',
        ];

        // page level plugins
        $this->js['plugins']= [
            'global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js',
            'global/plugins/bower_components/jquery-backstretch/jquery.backstretch.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/pages/blankon.sign.js',
            'admin/js/pages/blankon.sign.type2.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'SIGN IN TYPE 2 | BLANKON - Fullpack Admin Theme');

        return view('page/signin-type2');
    }

    /**
     * Show the sign up page screen to the user.
     *
     * @return Response
     */
    public function signup() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/sign.css',
            'admin/css/custom.css',
        ];

        $this->js['plugins'][] = 'global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js';
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/pages/blankon.sign.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'SIGN UP | BLANKON - Fullpack Admin Theme');

        return view('page/signup');
    }

    /**
     * Show the lost password page screen to the user.
     *
     * @return Response
     */
    public function lostPassword() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/sign.css',
            'admin/css/custom.css',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/pages/blankon.sign.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'LOST PASSWORD | BLANKON - Fullpack Admin Theme');

        return view('page/lost-password');
    }

    /**
     * Show the lock screen page screen to the user.
     *
     * @return Response
     */
    public function lockScreen() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/sign.css',
            'admin/css/custom.css',
        ];

        $this->js['plugins'] = [];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/pages/blankon.sign.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'LOCK SCREEN | BLANKON - Fullpack Admin Theme');

        return view('page/lock-screen');
    }

}
