<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {

    public function form_element()
    {
        // Set title page
        $this->smartyci->assign('title', 'FORM ELEMENT');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
            'chosen_v1.2.0/chosen.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
            'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
            'holderjs/holder.js',
            'bootstrap-maxlength/bootstrap-maxlength.min.js',
            'jquery-autosize/jquery.autosize.min.js',
            'chosen_v1.2.0/chosen.jquery.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.form.element.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/element.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_element', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function form_advanced()
    {
        // Set title page
        $this->smartyci->assign('title', 'FORM ADVANCED');

        // Set CSS plugins
        $css_plugin = array(
            'dropzone/downloads/css/dropzone.css',
            'bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css',
            'bootstrap-datepicker-vitalets/css/datepicker.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'dropzone/downloads/dropzone.min.js',
            'bootstrap-switch/dist/js/bootstrap-switch.min.js',
            'jquery.inputmask/dist/jquery.inputmask.bundle.min.js',
            'bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.form.advanced.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/advanced.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_advanced', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function form_layout()
    {
        // Set title page
        $this->smartyci->assign('title', 'FORM LAYOUT');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-fileupload/css/bootstrap-fileupload.min.css',
            'chosen_v1.2.0/chosen.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-fileupload/js/bootstrap-fileupload.min.js',
            'chosen_v1.2.0/chosen.jquery.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.form.layout.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/layout.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_layout', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function form_validation()
    {
        // Set title page
        $this->smartyci->assign('title', 'FORM VALIDATION');

        // Set JS plugins
        $js_plugin = array(
            'chosen_v1.2.0/chosen.jquery.min.js',
            'jquery-mockjax/jquery.mockjax.js',
            'jquery-validation/dist/jquery.validate.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.form.validation.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/validation.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_validation', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function form_wizard()
    {
        // Set title page
        $this->smartyci->assign('title', 'FORM VALIDATION');

        // Set JS plugins
        $js_plugin = array(
            'jquery-validation/dist/jquery.validate.min.js',
            'twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.form.wizard.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/wizard.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_wizard', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function form_wysiwyg()
    {
        // Set title page
        $this->smartyci->assign('title', 'FORM WYSIWYG');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
            'summernote/dist/summernote.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
            'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js',
            'summernote/dist/summernote.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.form.wysiwyg.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/wysiwyg.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_wysiwyg', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function form_xeditable()
    {
        // Set title page
        $this->smartyci->assign('title', 'FORM X-EDITABLE');

        // Set CSS plugins
        $css_plugin = array(
            'select2-ng/select2.css',
            'select2-ng/select2-bootstrap.css',
            'smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
            'x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css',
            'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css',
            'x-editable/dist/inputs-ext/address/address.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'jquery-mockjax/jquery.mockjax.js',
            'moment/min/moment.min.js',
            'select2-ng/select2.min.js',
            'smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
            'x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js',
            'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js',
            'x-editable/dist/inputs-ext/typeaheadjs/typeaheadjs.js',
            'x-editable/dist/inputs-ext/address/address.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.form.xeditable.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/xeditable.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_xeditable', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

}
