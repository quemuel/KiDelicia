<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function page_gallery()
    {
        // Set title page
        $this->smartyci->assign('title', 'GALLERY');

        // Set CSS page
        $css_page = array(
            'gallery.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
        $js_plugin = array(
            'mixitup/build/jquery.mixitup.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.gallery.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/gallery.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_gallery', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function page_faq()
    {
        // Set title page
        $this->smartyci->assign('title', 'FAQ');

        // Set CSS plugins commercial
        $css_commercial = array(
            'cube-portfolio/cubeportfolio/css/cubeportfolio.css'
        );
        $this->smartyci->assign('list_css_commercial',$css_commercial);

        // Set CSS page
        $css_page = array(
            'faq.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins commercial
        $js_commercial = array(
            'cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js'
        );
        $this->smartyci->assign('list_js_commercial',$js_commercial);

        // Set JS page
        $js_page = array(
            'blankon.faq.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/faq.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_faq', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function page_invoice()
    {
        // Set title page
        $this->smartyci->assign('title', 'INVOICE');

        // Set CSS page
        $css_page = array(
            'invoice.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/invoice.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_invoice', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function page_messages()
    {
        // Set title page
        $this->smartyci->assign('title', 'MESSAGES');

        // Set CSS page
        $css_page = array(
            'messages.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/messages.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_messages', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function page_timeline()
    {
        // Set title page
        $this->smartyci->assign('title', 'TIMELINE');

        // Set CSS page
        $css_page = array(
            'timeline.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS CDN
        $js_cdn = array(
            'http://maps.googleapis.com/maps/api/js?sensor=false'
        );
        $this->smartyci->assign('list_js_cdn',$js_cdn);

        // Set JS plugin
        $js_plugin = array(
            'gmap3/dist/gmap3.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.timeline.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/timeline.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_timeline', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function page_profile()
    {
        // Set title page
        $this->smartyci->assign('title', 'PROFILE');

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/profile.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_profile', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function page_search_course()
    {
        // Set title page
        $this->smartyci->assign('title', 'SEARCH COURSE');

        // Set CSS plugin
        $css_plugin = array(
            'chosen_v1.2.0/chosen.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set CSS page
        $css_page = array(
            'search.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugin
        $js_plugin = array(
            'chosen_v1.2.0/chosen.jquery.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.search.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/search/course.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_search', 'active');
        $this->smartyci->assign('active_search_course', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function page_error_403()
    {
        // Set title page
        $this->smartyci->assign('title', 'ERROR 403');

        // Set CSS page
        $css_page = array(
            'error-page.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/error/error_403_type2.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_error', 'active');
        $this->smartyci->assign('active_error_403', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function page_error_404()
    {
        // Set title page
        $this->smartyci->assign('title', 'ERROR 404');

        // Set CSS page
        $css_page = array(
            'error-page.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/error/error_404_type2.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_error', 'active');
        $this->smartyci->assign('active_error_404', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function page_error_500()
    {
        // Set title page
        $this->smartyci->assign('title', 'ERROR 500');

        // Set CSS page
        $css_page = array(
            'error-page.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/pages/error/error_500_type2.html');

        // Set active menu
        $this->smartyci->assign('active_pages', 'active');
        $this->smartyci->assign('active_error', 'active');
        $this->smartyci->assign('active_error_500', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

}
