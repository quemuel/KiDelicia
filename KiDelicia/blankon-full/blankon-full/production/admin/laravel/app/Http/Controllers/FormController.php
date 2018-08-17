<?php

namespace App\Http\Controllers;

use View;

class FormController extends BlankonController {
    /*
      |--------------------------------------------------------------------------
      | FormController
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
     * Show the form element screen to the user.
     *
     * @return Response
     */
    public function element() {

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'global/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
            'global/plugins/bower_components/jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
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
            'global/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
            'global/plugins/bower_components/jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
            'global/plugins/bower_components/holderjs/holder.js',
            'global/plugins/bower_components/bootstrap-maxlength/bootstrap-maxlength.min.js',
            'global/plugins/bower_components/jquery-autosize/jquery.autosize.min.js',
            'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js'
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.form.element.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FORM ELEMENT | BLANKON - Fullpack Admin Theme');
        
        return view('form/element');
    }

    /**
     * Show the form advanced screen to the user.
     *
     * @return Response
     */
    public function advanced() {

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'global/plugins/bower_components/dropzone/downloads/css/dropzone.css',
            'global/plugins/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css',
            'global/plugins/bower_components/bootstrap-datepicker-vitalets/css/datepicker.css'
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
            'global/plugins/bower_components/dropzone/downloads/dropzone.min.js',
            'global/plugins/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js',
            'global/plugins/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.min.js',
            'global/plugins/bower_components/bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js'
        ];
        
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.form.advanced.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FORM ADVANCED | BLANKON - Fullpack Admin Theme');
        
        return view('form/advanced');
    }

    /**
     * Show the form layout screen to the user.
     *
     * @return Response
     */
    public function layout() {

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'global/plugins/bower_components/bootstrap-fileupload/css/bootstrap-fileupload.min.css',
            'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css',
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
            'global/plugins/bower_components/bootstrap-fileupload/js/bootstrap-fileupload.min.js',
            'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js'
        ];
        
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.form.layout.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FORM LAYOUT | BLANKON - Fullpack Admin Theme');
        
        return view('form/layout');
    }

    /**
     * Show the form validation screen to the user.
     *
     * @return Response
     */
    public function validation() {

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
            'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js',
            'global/plugins/bower_components/jquery-mockjax/jquery.mockjax.js',
            'global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js'
        ];
        
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.form.validation.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FORM VALIDATION | BLANKON - Fullpack Admin Theme');
        
        return view('form/validation');
    }

    /**
     * Show the form wizard screen to the user.
     *
     * @return Response
     */
    public function wizard() {

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
            'global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js',
            'global/plugins/bower_components/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
        ];
        
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.form.wizard.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FORM VALIDATION | BLANKON - Fullpack Admin Theme');
        return view('form/wizard');
    }

    /**
     * Show the form wysiwyg screen to the user.
     *
     * @return Response
     */
    public function wysiwyg() {

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'global/plugins/bower_components/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
            'global/plugins/bower_components/summernote/dist/summernote.css',
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
            'global/plugins/bower_components/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
            'global/plugins/bower_components/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js',
            'global/plugins/bower_components/summernote/dist/summernote.min.js'
        ];
        
        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.form.wysiwyg.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FORM WYSIWYG | BLANKON - Fullpack Admin Theme');
        
        return view('form/wysiwyg');
    }

    /**
     * Show the form x-editable screen to the user.
     *
     * @return Response
     */
    public function xeditable() {

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
            'global/plugins/bower_components/animate.css/animate.min.css',
            'global/plugins/bower_components/select2-ng/select2.css',
            'global/plugins/bower_components/select2-ng/select2-bootstrap.css',
            'global/plugins/bower_components/smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
            'global/plugins/bower_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css',
            'global/plugins/bower_components/x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css',
            'global/plugins/bower_components/x-editable/dist/inputs-ext/address/address.css',
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
            'global/plugins/bower_components/jquery-mockjax/jquery.mockjax.js',
            'global/plugins/bower_components/moment/min/moment.min.js',
            'global/plugins/bower_components/select2-ng/select2.min.js',
            'global/plugins/bower_components/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
            'global/plugins/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js',
            'global/plugins/bower_components/x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js',
            'global/plugins/bower_components/x-editable/dist/inputs-ext/typeaheadjs/typeaheadjs.js',
            'global/plugins/bower_components/x-editable/dist/inputs-ext/address/address.js',
        ];

        // page level scripts
        $this->js['scripts'] = [
            'admin/js/apps.js',
            'admin/js/pages/blankon.form.xeditable.js',
            'admin/js/demo.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'FORM X-EDITABLE | BLANKON - Fullpack Admin Theme');

        return view('form/xeditable');
    }

}
