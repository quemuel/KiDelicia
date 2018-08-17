<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

    public function mail_inbox()
    {
        // Set title page
        $this->smartyci->assign('title', 'MAIL INBOX');

        // Set CSS page
        $css_page = array(
            'mail.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS page
        $js_page = array(
            'blankon.mail.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/mail/inbox.html');

        // Set active menu
        $this->smartyci->assign('active_mail', 'active');
        $this->smartyci->assign('active_mail_inbox', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function mail_compose()
    {
        // Set title page
        $this->smartyci->assign('title', 'MAIL COMPOSE');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
            'bootstrap-fileupload/css/bootstrap-fileupload.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set CSS page
        $css_page = array(
            'mail.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
            'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js',
            'bootstrap-fileupload/js/bootstrap-fileupload.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.mail.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/mail/compose.html');

        // Set active menu
        $this->smartyci->assign('active_mail', 'active');
        $this->smartyci->assign('active_mail_compose', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function mail_view()
    {
        // Set title page
        $this->smartyci->assign('title', 'MAIL VIEW');

        // Set CSS page
        $css_page = array(
            'mail.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/mail/view.html');

        // Set active menu
        $this->smartyci->assign('active_mail', 'active');
        $this->smartyci->assign('active_mail_view', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

}
