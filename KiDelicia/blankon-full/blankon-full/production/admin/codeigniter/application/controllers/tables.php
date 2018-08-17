<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tables extends CI_Controller {

    public function table_default()
    {
        // Set title page
        $this->smartyci->assign('title', 'DEFAULT TABLE');

        // Set content page
        $this->smartyci->assign('body', 'contents/tables/default.html');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');
        $this->smartyci->assign('active_table_default', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function table_color()
    {
        // Set title page
        $this->smartyci->assign('title', 'COLOR TABLE');

        // Set content page
        $this->smartyci->assign('body', 'contents/tables/color.html');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');
        $this->smartyci->assign('active_table_color', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function table_datatable()
    {
        // Set title page
        $this->smartyci->assign('title', 'DATATABLE');

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'datatables/js/jquery.dataTables.min.js',
            'datatables/js/dataTables.bootstrap.js',
            'datatables/js/datatables.responsive.js',
            'fuelux/dist/js/fuelux.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.table.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/tables/datatable.html');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');
        $this->smartyci->assign('active_table_datatable', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

}
