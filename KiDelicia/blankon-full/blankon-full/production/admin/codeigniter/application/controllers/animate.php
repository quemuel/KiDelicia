<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animate extends CI_Controller {

    public function index()
    {
        // Set title page
        $this->smartyci->assign('title', 'ANIMATE.CSS');

        // Set JS page
        $js_page = array(
            'blankon.animate.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/animate.html');

        // Set active menu
        $this->smartyci->assign('active_animate', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
}
