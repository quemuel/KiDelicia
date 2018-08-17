<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        // Set title page
        $this->smartyci->assign('title', 'DASHBOARD');

        // Set CSS plugins
        $css_plugin = array(
            'dropzone/downloads/css/dropzone.css',
            'jquery.gritter/css/jquery.gritter.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js',
            'flot/jquery.flot.js',
            'flot/jquery.flot.spline.min.js',
            'flot/jquery.flot.categories.js',
            'flot/jquery.flot.tooltip.min.js',
            'flot/jquery.flot.resize.js',
            'flot/jquery.flot.pie.js',
            'dropzone/downloads/dropzone.min.js',
            'jquery.gritter/js/jquery.gritter.min.js',
            'skycons-html5/skycons.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.dashboard.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/dashboard.html');

        // Set active menu
        $this->smartyci->assign('active_dashboard', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
}
