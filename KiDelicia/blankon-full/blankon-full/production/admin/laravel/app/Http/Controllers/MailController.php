<?php

namespace App\Http\Controllers;

use View;

class MailController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | Mail Controller
      |--------------------------------------------------------------------------
      |
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
     * Show the mail inbox screen to the user.
     *
     * @return Response
     */
    public function inbox() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/mail.css',
            'admin/css/custom.css',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.mail.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'MAIL INBOX | BLANKON - Fullpack Admin Theme');
        
        return view('mail/inbox');
    }

    /**
     * Show the mail compose screen to the user.
     *
     * @return Response
     */
    public function compose() {
        
        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'global/plugins/bower_components/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
            'global/plugins/bower_components/bootstrap-fileupload/css/bootstrap-fileupload.min.css'
        ];

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/mail.css',
            'admin/css/custom.css',
        ];

        // page level plugins
        $this->js['plugins'] = [
            'global/plugins/bower_components/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
            'global/plugins/bower_components/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js',
            'global/plugins/bower_components/bootstrap-fileupload/js/bootstrap-fileupload.min.js',
        ];
        
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.mail.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'MAIL COMPOSE | BLANKON - Fullpack Admin Theme');
        
        return view('mail/compose');
    }

    /**
     * Show the mail view screen to the user.
     *
     * @return Response
     */
    public function view() {

        // theme styles
        $this->css['themes'] = [
            'admin/css/reset.css',
            'admin/css/layout.css',
            'admin/css/components.css',
            'admin/css/plugins.css',
            'admin/css/themes/laravel.theme.css' => ['id' => 'theme'],
            'admin/css/pages/mail.css',
            'admin/css/custom.css',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.mail.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'MAIL VIEW | BLANKON - Fullpack Admin Theme');
        
        return view('mail/view');
    }

}
