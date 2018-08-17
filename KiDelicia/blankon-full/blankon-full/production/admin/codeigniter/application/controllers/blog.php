<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function blog_grid()
    {
        // Set title page
        $this->smartyci->assign('title', 'BLOG GRID');

        // Set JS plugins
        $js_plugin = array(
            'masonry/dist/masonry.pkgd.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.blog.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/blog/grid.html');

        // Set active menu
        $this->smartyci->assign('active_blog', 'active');
        $this->smartyci->assign('active_blog_grid', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function blog_list()
    {
        // Set title page
        $this->smartyci->assign('title', 'BLOG LIST');

        // Set content page
        $this->smartyci->assign('body', 'contents/blog/list.html');

        // Set active menu
        $this->smartyci->assign('active_blog', 'active');
        $this->smartyci->assign('active_blog_list', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function blog_single()
    {
        // Set title page
        $this->smartyci->assign('title', 'BLOG SINGLE');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
            'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.blog.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/blog/single.html');

        // Set active menu
        $this->smartyci->assign('active_blog', 'active');
        $this->smartyci->assign('active_blog_single', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

}
