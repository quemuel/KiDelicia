<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_themes extends CI_Controller {

    public function index()
    {
        // Set title page
        $this->smartyci->assign('title', 'FRONTEND THEMES');

        // Set CSS page
        $css_page = array(
            'frontend-themes.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/frontend_themes.html');

        // Set active menu
        $this->smartyci->assign('active_frontend_themes', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
}
