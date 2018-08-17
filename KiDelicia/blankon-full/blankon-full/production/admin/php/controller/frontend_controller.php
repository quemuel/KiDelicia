<?php


class frontend_controller {

    public function __construct() {
    /*
     * this declaration new class from global config
     * */
        $this->config = new config();
    }

    /*
     * main function in class controller to run
     */
    public function runIndex(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FRONTEND THEMES | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Frontend Themes ', //this title to breadcrumb
            'info'          =>'All within bundle PHP', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssFrontendPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.spline.min.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.categories.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.tooltip.min.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.resize.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.pie.js"></script>
                                <script src="'.$pathLevelPlugins.'dropzone/downloads/dropzone.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery.gritter/js/jquery.gritter.min.js"></script>
                                <script src="'.$pathLevelPlugins.'skycons-html5/skycons.js"></script>
                            ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFrontend' =>'class="active"',
            'selectFrontend'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url() //assign the base url from global config
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/layout.php');

                $header = file_get_contents('partial/header.php');
                $template = str_replace('{header}', $header, $template);             //assign $header to {header}
                $sidebarLeft = file_get_contents('partial/sidebar-left.php');
                $template = str_replace('{sidebarLeft}', $sidebarLeft, $template);  //assign $sidebarLeft to {sidebarLeft}
                $sidebarRight = file_get_contents('partial/sidebar-right.php');
                $template = str_replace('{sidebarRight}', $sidebarRight, $template); //assign $sidebarRight to {sidebarRight}
                $content= file_get_contents('view/frontend-content.php');
                $template = str_replace('{content}', $content, $template);           //assign $header to {content}
                $footer = file_get_contents('partial/footer.php');
                $template = str_replace('{footer}', $footer, $template);             //assign $footer to {footer}

        /*
         * get the key of library
         */
        foreach ($library as $key => $value) {
            /*
             * get value and key then assign to $template view
             */
            $template = str_replace('{'.$key.'}', $value, $template);
        }
        /*
         * show the
         */
        print($template);

    }

}

?>
