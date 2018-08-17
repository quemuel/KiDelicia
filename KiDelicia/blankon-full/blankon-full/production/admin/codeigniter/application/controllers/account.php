<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

    public function sign_in()
    {
        // Set title page
        $this->smartyci->assign('title', 'SIGN IN');

        // Set CSS page
        $css_page = array(
            'sign.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
        $js_plugin = array(
            'jquery-validation/dist/jquery.validate.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.sign.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/sign/sign_in.html');

        // Render view on main layout
        $this->smartyci->display('contents/account.html');
    }

    public function sign_up()
    {
        // Set title page
        $this->smartyci->assign('title', 'SIGN UP');

        // Set CSS page
        $css_page = array(
            'sign.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/sign/sign_up.html');

        // Render view on main layout
        $this->smartyci->display('contents/account.html');
    }

    public function lost_password()
    {
        // Set title page
        $this->smartyci->assign('title', 'LOST PASSWORD');

        // Set CSS page
        $css_page = array(
            'sign.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/sign/lost_password.html');

        // Render view on main layout
        $this->smartyci->display('contents/account.html');
    }

    public function lock_screen()
    {
        // Set title page
        $this->smartyci->assign('title', 'LOCK SCREEN');

        // Set CSS page
        $css_page = array(
            'sign.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/sign/lock_screen.html');

        // Render view on main layout
        $this->smartyci->display('contents/account.html');
    }

}
