<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends CI_Controller {

    public function error_403()
    {
        // Set title page
        $this->smartyci->assign('title', 'ERROR 403');

        // Set content page
        $this->smartyci->assign('body', 'contents/errors/403.html');

        // Render view on main layout
        $this->smartyci->display('contents/error.html');
    }

    public function error_404()
    {
        // Set title page
        $this->smartyci->assign('title', 'ERROR 404');

        // Set content page
        $this->smartyci->assign('body', 'contents/errors/404.html');

        // Render view on main layout
        $this->smartyci->display('contents/error.html');
    }

    public function error_500()
    {
        // Set title page
        $this->smartyci->assign('title', 'ERROR 500');

        // Set content page
        $this->smartyci->assign('body', 'contents/errors/500.html');

        // Render view on main layout
        $this->smartyci->display('contents/error.html');
    }

}
