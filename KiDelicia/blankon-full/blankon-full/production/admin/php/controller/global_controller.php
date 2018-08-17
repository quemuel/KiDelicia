<?php
/*class globalController,
    this class to determine the page to be displayed based on a url
*/
class global_controller {

    public function __construct() {
        /*
        * declaration required files on this page
        */
        require_once 'controller/dashboard_controller.php';
        require_once 'controller/frontend_controller.php';
        require_once 'controller/versions_controller.php';
        require_once 'controller/animate_controller.php';
        require_once 'config/config.php'; //this file for global configuration
    }
    /*
     * This is the main function of which will be used to determine the page to be displayed
     */
    public function run($page){

        switch($page){
            case "frontend" :
                    $home_view = new frontend_controller;
                    $home_view->runIndex();
                    break;
            case "versions" :
                    $home_view = new version_controller;
                    $home_view->runIndex();
                    break;
            case "blog-grid" :
                    $home_view = new dashboard_controller();
                    $home_view->blog_grid();
                    break;
            case "blog-list" :
                    $home_view = new dashboard_controller();
                    $home_view->blog_list();
                    break;
            case "blog-single" :
                    $home_view = new dashboard_controller();
                    $home_view->blog_single();
                    break;
            case "mail-inbox" :
                    $home_view = new dashboard_controller();
                    $home_view->mail_inbox();
                    break;
            case "mail-compose" :
                    $home_view = new dashboard_controller();
                    $home_view->mail_compose();
                    break;
            case "mail-view" :
                    $home_view = new dashboard_controller();
                    $home_view->mail_view();
                    break;
            case "page-gallery" :
                    $home_view = new dashboard_controller();
                    $home_view->page_gallery();
                    break;
            case "page-faq" :
                    $home_view = new dashboard_controller();
                    $home_view->page_faq();
                    break;
            case "page-calendar" :
                    $home_view = new dashboard_controller();
                    $home_view->page_calendar();
                    break;
            case "page-invoice" :
                    $home_view = new dashboard_controller();
                    $home_view->page_invoice();
                    break;
            case "page-messages" :
                    $home_view = new dashboard_controller();
                    $home_view->page_messages();
                    break;
            case "page-timeline" :
                    $home_view = new dashboard_controller();
                    $home_view->page_timeline();
                    break;
            case "page-profile" :
                    $home_view = new dashboard_controller();
                    $home_view->page_profile();
                    break;
            case "page-search-course" :
                    $home_view = new dashboard_controller();
                    $home_view->page_search_course();
                    break;
            case "page-error-403" :
                    $home_view = new dashboard_controller();
                    $home_view->page_error_403();
                    break;
            case "page-error-403-type-2" :
                    $home_view = new dashboard_controller();
                    $home_view->page_error_403_type_2();
                    break;
            case "page-error-404" :
                    $home_view = new dashboard_controller();
                    $home_view->page_error_404();
                    break;
            case "page-error-404-type-2" :
                    $home_view = new dashboard_controller();
                    $home_view->page_error_404_type_2();
                    break;
            case "page-error-500" :
                    $home_view = new dashboard_controller();
                    $home_view->page_error_500();
                    break;
            case "page-error-500-type-2" :
                    $home_view = new dashboard_controller();
                    $home_view->page_error_500_type_2();
                    break;
            case "page-signin" :
                    $home_view = new dashboard_controller();
                    $home_view->page_signin();
                    break;
            case "page-signin-type-2" :
                    $home_view = new dashboard_controller();
                    $home_view->page_signin_type_2();
                    break;
            case "page-signup" :
                    $home_view = new dashboard_controller();
                    $home_view->page_signup();
                    break;
            case "page-lost-password" :
                    $home_view = new dashboard_controller();
                    $home_view->page_lost_password();
                    break;
            case "page-lock-screen" :
                    $home_view = new dashboard_controller();
                    $home_view->page_lock_screen();
                    break;
            case "form-elements" :
                    $home_view = new dashboard_controller();
                    $home_view->form_element();
                    break;
            case "form-advanced" :
                    $home_view = new dashboard_controller();
                    $home_view->form_advanced();
                    break;
            case "form-layout" :
                    $home_view = new dashboard_controller();
                    $home_view->form_layout();
                    break;
            case "form-validation" :
                    $home_view = new dashboard_controller();
                    $home_view->form_validation();
                    break;
            case "form-wizard" :
                    $home_view = new dashboard_controller();
                    $home_view->form_wizard();
                    break;
            case "form-wysiwyg" :
                    $home_view = new dashboard_controller();
                    $home_view->form_wysiwyg();
                    break;
            case "form-xeditable" :
                    $home_view = new dashboard_controller();
                    $home_view->form_xeditable();
                    break;
            case "table-default" :
                    $home_view = new dashboard_controller();
                    $home_view->table_default();
                    break;
            case "table-color" :
                    $home_view = new dashboard_controller();
                    $home_view->table_color();
                    break;
            case "table-datatable" :
                    $home_view = new dashboard_controller();
                    $home_view->table_datatable();
                    break;
            case "maps-google" :
                    $home_view = new dashboard_controller();
                    $home_view->maps_google();
                    break;
            case "maps-vector" :
                    $home_view = new dashboard_controller();
                    $home_view->maps_vector();
                    break;
            case "chart-flot" :
                    $home_view = new dashboard_controller();
                    $home_view->chart_float();
                    break;
            case "chart-morris" :
                    $home_view = new dashboard_controller();
                    $home_view->chart_morris();
                    break;
            case "chart-chartjs" :
                    $home_view = new dashboard_controller();
                    $home_view->chart_chartjs();
                    break;
            case "chart-c3js" :
                    $home_view = new dashboard_controller();
                    $home_view->chart_c3js();
                    break;
            case "grid-system" :
                    $home_view = new dashboard_controller();
                    $home_view->grid_system();
                    break;
            case "buttons" :
                    $home_view = new dashboard_controller();
                    $home_view->buttons();
                    break;
            case "typography" :
                    $home_view = new dashboard_controller();
                    $home_view->typography();
                    break;
            case "panels" :
                    $home_view = new dashboard_controller();
                    $home_view->panels();
                    break;
            case "alerts" :
                    $home_view = new dashboard_controller();
                    $home_view->alerts();
                    break;
            case "modals" :
                    $home_view = new dashboard_controller();
                    $home_view->modals();
                    break;
            case "video" :
                    $home_view = new dashboard_controller();
                    $home_view->video();
                    break;
            case "tabs-accordion" :
                    $home_view = new dashboard_controller();
                    $home_view->tabs_accordion();
                    break;
            case "sliders" :
                    $home_view = new dashboard_controller();
                    $home_view->sliders();
                    break;
            case "glyphicons" :
                    $home_view = new dashboard_controller();
                    $home_view->glyphicons();
                    break;
            case "glyphicons-pro" :
                    $home_view = new dashboard_controller();
                    $home_view->glyphicons_pro();
                    break;
            case "font-awesome" :
                    $home_view = new dashboard_controller();
                    $home_view->font_awesome();
                    break;
            case "weather-icon" :
                    $home_view = new dashboard_controller();
                    $home_view->weather_icon();
                    break;
            case "map-icons" :
                    $home_view = new dashboard_controller();
                    $home_view->map_icons();
                    break;
            case "simple-line-icons" :
                    $home_view = new dashboard_controller();
                    $home_view->simple_line_icons();
                    break;
            case "others" :
                    $home_view = new dashboard_controller();
                    $home_view->others();
                    break;
            case "blank-page" :
                    $home_view = new dashboard_controller();
                    $home_view->blank_page();
                    break;
            case "boxed-page" :
                    $home_view = new dashboard_controller();
                    $home_view->boxed_page();
                    break;
            case "header-fixed-page" :
                    $home_view = new dashboard_controller();
                    $home_view->header_fixed_page();
                    break;
            case "sidebar-fixed-page" :
                    $home_view = new dashboard_controller();
                    $home_view->sidebar_fixed_page();
                    break;
            case "sidebar-minimize-page" :
                    $home_view = new dashboard_controller();
                    $home_view->sidebar_minimize_page();
                    break;
            case "sidebar-default-page" :
                    $home_view = new dashboard_controller();
                    $home_view->sidebar_default_page();
                    break;
            case "sidebar-box-page" :
                    $home_view = new dashboard_controller();
                    $home_view->sidebar_box_page();
                    break;
            case "layout-sidebar-rounded" :
                    $home_view = new dashboard_controller();
                    $home_view->layout_sidebar_rounded();
                    break;
            case "layout-sidebar-circle" :
                    $home_view = new dashboard_controller();
                    $home_view->layout_sidebar_circle();
                    break;
            case "layout-footer-fixed" :
                    $home_view = new dashboard_controller();
                    $home_view->layout_footer_fixed();
                    break;
            case "animate" :
                    $home_view = new animate_controller();
                    $home_view->runIndex();
                    break;
            case "overview" :
                    $home_view = new dashboard_controller();
                    $home_view->overview();
                    break;
            case "social" :
                    $home_view = new dashboard_controller();
                    $home_view->social();
                    break;
            case "blog" :
                    $home_view = new dashboard_controller();
                    $home_view->blog();
                    break;
            case "weather" :
                    $home_view = new dashboard_controller();
                    $home_view->weather();
                    break;
            case "misc" :
                    $home_view = new dashboard_controller();
                    $home_view->misc();
                    break;


            /*
             * default page if 'v' parameter is null
             * */
            default         :
                $home_view = new dashboard_controller;
                $home_view->runIndex();
                break;
        }

    }

}

?>
