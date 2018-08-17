<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Charts extends CI_Controller {

    public function chart_flot()
    {
        // Set title page
        $this->smartyci->assign('title', 'FLOT CHARTS');

        // Set JS plugins
        $js_plugin = array(
            'flot/jquery.flot.js',
            'flot/jquery.flot.spline.min.js',
            'flot/jquery.flot.categories.js',
            'flot/jquery.flot.tooltip.min.js',
            'flot/jquery.flot.resize.js',
            'flot/jquery.flot.pie.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.chart.flot.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/charts/flot.html');

        // Set active menu
        $this->smartyci->assign('active_charts', 'active');
        $this->smartyci->assign('active_chart_flot', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function chart_morris()
    {
        // Set title page
        $this->smartyci->assign('title', 'MORRIS CHARTS');

        // Set CSS plugins
        $css_plugin = array(
            'morrisjs/morris.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'raphael/raphael-min.js',
            'morrisjs/morris.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.chart.morris.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/charts/morris.html');

        // Set active menu
        $this->smartyci->assign('active_charts', 'active');
        $this->smartyci->assign('active_chart_morris', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function chart_chartjs()
    {
        // Set title page
        $this->smartyci->assign('title', 'CHARTJS CHARTS');

        // Set JS plugins
        $js_plugin = array(
            'chartjs/Chart.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.chart.chartjs.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/charts/chartjs.html');

        // Set active menu
        $this->smartyci->assign('active_charts', 'active');
        $this->smartyci->assign('active_chart_chartjs', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function chart_c3js()
    {
        // Set title page
        $this->smartyci->assign('title', 'C3JS CHARTS');

        // Set CSS plugins
        $css_plugin = array(
            'c3js-chart/c3.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'd3/d3.min.js',
            'c3js-chart/c3.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.chart.c3.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/charts/c3js.html');

        // Set active menu
        $this->smartyci->assign('active_charts', 'active');
        $this->smartyci->assign('active_chart_c3js', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

}
