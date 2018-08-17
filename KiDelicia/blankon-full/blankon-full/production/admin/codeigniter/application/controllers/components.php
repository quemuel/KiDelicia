<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Components extends CI_Controller {

    public function component_grid_system()
    {
        // Set title page
        $this->smartyci->assign('title', 'GRID SYSTEM');

        // Set content page
        $this->smartyci->assign('body', 'contents/components/grid_system.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_grid_system', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_button()
    {
        // Set title page
        $this->smartyci->assign('title', 'BUTTONS');

        // Set content page
        $this->smartyci->assign('body', 'contents/components/buttons.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_button', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_typography()
    {
        // Set title page
        $this->smartyci->assign('title', 'BUTTONS');

        // Set CSS plugins
        $css_plugin = array(
            'google-code-prettify/bin/prettify.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'google-code-prettify/bin/prettify.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.typography.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/components/typography.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_typography', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_panel()
    {
        // Set title page
        $this->smartyci->assign('title', 'PANELS');

        // Set content page
        $this->smartyci->assign('body', 'contents/components/panels.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_panel', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_alert()
    {
        // Set title page
        $this->smartyci->assign('title', 'ALERTS');

        // Set content page
        $this->smartyci->assign('body', 'contents/components/alerts.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_alert', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_modal()
    {
        // Set title page
        $this->smartyci->assign('title', 'MODALS');

        // Set content page
        $this->smartyci->assign('body', 'contents/components/modals.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_modal', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_video()
    {
        // Set title page
        $this->smartyci->assign('title', 'VIDEO');

        // Set content page
        $this->smartyci->assign('body', 'contents/components/video.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_video', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_tabsaccordion()
    {
        // Set title page
        $this->smartyci->assign('title', 'TABS & ACCORDION');

        // Set content page
        $this->smartyci->assign('body', 'contents/components/tabs_accordion.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_tabsaccordion', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_slider()
    {
        // Set title page
        $this->smartyci->assign('title', 'SLIDERS');

        // Set CSS plugins
        $css_plugin = array(
            'ion.rangeSlider/css/ion.rangeSlider.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'ion.rangeSlider/js/ion.rangeSlider.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.slider.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/components/sliders.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_slider', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_glyphicons()
    {
        // Set title page
        $this->smartyci->assign('title', 'GLYPHICONS');

        // Set CSS plugins
        $css_page = array(
            'glyphicons.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/components/icons/glyphicons.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_icon', 'active');
        $this->smartyci->assign('active_component_icon_glyphicons', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_glyphicons_pro()
    {
        // Set title page
        $this->smartyci->assign('title', 'GLYPHICONS PRO');

        // Set CSS plugins commercial
        $css_commercial = array(
            'glyphicons-pro/glyphicons/web/html_css/css/glyphicons.css'
        );
        $this->smartyci->assign('list_css_commercial',$css_commercial);

        // Set CSS page
        $css_page = array(
            'glyphicons.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/components/icons/glyphicons_pro.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_icon', 'active');
        $this->smartyci->assign('active_component_icon_glyphicons_pro', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_font_awesome()
    {
        // Set title page
        $this->smartyci->assign('title', 'FONT AWESOME');

        // Set content page
        $this->smartyci->assign('body', 'contents/components/icons/font_awesome.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_icon', 'active');
        $this->smartyci->assign('active_component_icon_font_awesome', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_weather_icons()
    {
        // Set title page
        $this->smartyci->assign('title', 'WEATHER ICONS');

        // Set CSS plugins
        $css_plugin = array(
            'weather-icons/css/weather-icons.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set CSS page
        $css_page = array(
            'weather-icons.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/components/icons/weather_icons.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_icon', 'active');
        $this->smartyci->assign('active_component_icon_weather_icons', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_map_icons()
    {
        // Set title page
        $this->smartyci->assign('title', 'MAP ICONS');

        // Set CSS plugins
        $css_plugin = array(
            'map-icons/css/map-icons.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS CDN
        $js_cdn = array(
            'http://maps.googleapis.com/maps/api/js?sensor=false'
        );
        $this->smartyci->assign('list_js_cdn',$js_cdn);

        // Set JS plugins
        $js_plugin = array(
            'map-icons/js/map-icons.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.maps.icon.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/components/icons/map_icons.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_icon', 'active');
        $this->smartyci->assign('active_component_icon_map_icons', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_simple_line_icons()
    {
        // Set title page
        $this->smartyci->assign('title', 'SIMPLE LINE ICONS');

        // Set CSS plugins
        $css_plugin = array(
            'simple-line-icons/css/simple-line-icons.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set CSS page
        $css_page = array(
            'icon.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/components/icons/simple_line_icons.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_icon', 'active');
        $this->smartyci->assign('active_component_icon_simple_line_icons', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function component_other()
    {
        // Set title page
        $this->smartyci->assign('title', 'OTHER COMPONENT');

        // Set content page
        $this->smartyci->assign('body', 'contents/components/other.html');

        // Set active menu
        $this->smartyci->assign('active_components', 'active');
        $this->smartyci->assign('active_component_other', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

}
