<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Widget extends CI_Controller {

    public function widget_overview()
    {
        // Set title page
        $this->smartyci->assign('title', 'OVERVIEW WIDGET');

        // Set JS plugins
        $js_plugin = array(
            'raphael/raphael-min.js',
            'flot/jquery.flot.js',
            'flot/jquery.flot.spline.min.js',
            'flot/jquery.flot.categories.js',
            'flot/jquery.flot.tooltip.min.js',
            'flot/jquery.flot.resize.js',
            'flot/jquery.flot.pie.js',
            'morrisjs/morris.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.widgets.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/widget/overview.html');

        // Set active menu
        $this->smartyci->assign('active_widget_overview', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function widget_social()
    {
        // Set title page
        $this->smartyci->assign('title', 'SOCIAL WIDGET');

        // Set CSS page
        $css_page = array(
            'timeline.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/widget/social.html');

        // Set active menu
        $this->smartyci->assign('active_widget_social', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function widget_blog()
    {
        // Set title page
        $this->smartyci->assign('title', 'BLOG WIDGET');

        // Set content page
        $this->smartyci->assign('body', 'contents/widget/blog.html');

        // Set active menu
        $this->smartyci->assign('active_widget_blog', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function widget_weather()
    {
        // Set title page
        $this->smartyci->assign('title', 'WEATHER WIDGET');

        // Set CSS plugin
        $css_plugin = array(
            'timeline.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugin
        $js_plugin = array(
            'skycons-html5/skycons.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.widget.weather.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/widget/weather.html');

        // Set active menu
        $this->smartyci->assign('active_widget_weather', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function widget_misc()
    {
        // Set title page
        $this->smartyci->assign('title', 'MISC WIDGET');

        // Set content page
        $this->smartyci->assign('body', 'contents/widget/misc.html');

        // Set active menu
        $this->smartyci->assign('active_widget_misc', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

}
