<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blankon_versions extends CI_Controller {

    public function index()
    {
        // Set title page
        $this->smartyci->assign('title', 'BLANKON VERSIONS');

        // Set content page
        $this->smartyci->assign('body', 'contents/blankon_versions.html');

        // Set active menu
        $this->smartyci->assign('active_blankon_versions', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
}
