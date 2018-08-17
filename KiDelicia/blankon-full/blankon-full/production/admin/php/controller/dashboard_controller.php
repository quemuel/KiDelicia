<?php


class dashboard_controller {

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
            'title'         =>'DASHBOARD | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Dashboard', //this title to breadcrumb
            'info'          =>'dashboard & statistics', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                             ' <link href="'.$pathLevelPlugins.'dropzone/downloads/css/dropzone.css" rel="stylesheet">
                               <link href="'.$pathLevelPlugins.'jquery.gritter/css/jquery.gritter.css" rel="stylesheet">
                               ', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
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
                                <script src="'.$pathAdmin.'pages/blankon.dashboard.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuDashboard' =>'class="active"',
            'selectDashboard'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
                $content= file_get_contents('view/dashboard-content.php');
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
    public function blog_grid(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'BLOG GRID | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blog Grid', //this title to breadcrumb
            'info'          =>'blog grid type and post samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'masonry/dist/masonry.pkgd.min.js"></script>
                            ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.blog.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuGrid' =>'active',
            'selectGrid'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/blog/grid.php');
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

    public function blog_list(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'BLOG LIST | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blog List', //this title to breadcrumb
            'info'          =>'blog list type and post samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'masonry/dist/masonry.pkgd.min.js"></script>
                            ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.blog.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuList' =>'active',
            'selectList'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/blog/list.php');
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

    public function blog_single(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'BLOG SINGLE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blog Single ', //this title to breadcrumb
            'info'          =>'blog single sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath().
                               '<link href="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
                            ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.blog.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSingle' =>'active',
            'selectSingle'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/blog/single.php');
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

    public function mail_inbox(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MAIL INBOX | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Inbox', //this title to breadcrumb
            'info'          =>'mail inbox sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssMailPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.mail.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuInbox' =>'active',
            'selectInbox'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/mail/inbox.php');
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
    public function mail_compose(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MAIL COMPOSE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Compose', //this title to breadcrumb
            'info'          =>'mail compose sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath().
                              '<link href="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet">
                               <link href="'.$pathLevelPlugins.'bootstrap-fileupload/css/bootstrap-fileupload.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssMailPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-fileupload/js/bootstrap-fileupload.min.js"></script> ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.mail.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuCompose' =>'active',
            'selectCompose'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/mail/compose.php');
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
    public function mail_view(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MAIL VIEW | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'View', //this title to breadcrumb
            'info'          =>'mail view sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssMailPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'  ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuView' =>'active',
            'selectView'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/mail/view.php');
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

    public function page_gallery(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'GALLERY | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Gallery', //this title to breadcrumb
            'info'          =>'gallery style', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssGalleryPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'mixitup/build/jquery.mixitup.min.js"></script> ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.gallery.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuGallery' =>'active',
            'selectGallery'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/gallery.php');
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

    public function page_faq(){
        $pathLevelCommercialPlugins="".$this->config->getBase_url()."assets/commercial/plugins/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FAQ | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'FAQ', //this title to breadcrumb
            'info'          =>'frequently asked questions', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(). //load the cssBowerPath from global config
                                '<link href="'.$pathLevelCommercialPlugins.'cube-portfolio/cubeportfolio/css/cubeportfolio.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssFaqPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelCommercialPlugins.'cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script> ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.faq.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFaq' =>'active',
            'selectFaq'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/faq.php');
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

    public function page_calendar(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'CALENDAR | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Calendar', //this title to breadcrumb
            'info'          =>'create your schedules', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath().
                               '
                                <link href="'.$pathLevelPlugins.'bootstrap-calendar/css/calendar.min.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsCalendarPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'<script src="'.$pathLevelPlugins.'jsTimezoneDetect/jstz.min.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/nl-NL.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/fr-FR.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/de-DE.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/el-GR.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/it-IT.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/pl-PL.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/pt-BR.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/ro-RO.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/es-MX.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/es-ES.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/ru-RU.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/sv-SE.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/zh-CN.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/cs-CZ.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/ko-KR.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/id-ID.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/calendar.min.js"></script>
                               <script src="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.jquery.min.js"></script> ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.calendar.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuCalendar' =>'active',
            'selectCalendar'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/calendar.php');
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

    public function page_invoice(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'INVOICE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Invoice', //this title to breadcrumb
            'info'          =>'invoice sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssInvoicePath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuInvoice' =>'active',
            'selectInvoice'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/invoice.php');
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

    public function page_messages(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MESSAGES | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Messages', //this title to breadcrumb
            'info'          =>'messages sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssMessagesPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuMessages' =>'active',
            'selectMessages'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/messages.php');
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

    public function page_timeline(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'TIMELINE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Timeline', //this title to breadcrumb
            'info'          =>'timeline activity', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssTimelinePath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'
                               <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
                               <script src="'.$pathLevelPlugins.'gmap3/dist/gmap3.min.js"></script>
                            ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.timeline.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuTimeline' =>'active',
            'selectTimeline'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/timeline.php');
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

    public function page_profile(){

        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'PROFILE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Profile', //this title to breadcrumb
            'info'          =>'profile sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuProfile' =>'active',
            'selectProfile'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/profile.php');
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

    public function page_search_course(){

        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SEARCH COURSE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath().
                               '  <link href="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssSearchPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'
                                <script src="'.$pathLevelPlugins.'/chosen_v1.2.0/chosen.jquery.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.search.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSearch' =>'active',
            'selectSearch'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/search-course.php');
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

    public function page_error_403(){

        $library = Array(
            'title'         =>'ERROR 403 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError403' =>'active',
            'selectError403'=>'class="selected"',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url() //assign the base url from global config
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/error.php');

        $content= file_get_contents('view/pages/error-403.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_error_403_type_2(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'ERROR 403 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Error 403', //this title to breadcrumb
            'info'          =>'access is denied', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->csseErrorPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuError403T2' =>'active',
            'selectError403T2'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/error-403-type-2.php');
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

    public function page_error_404(){

        $library = Array(
            'title'         =>'ERROR 404 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url() //assign the base url from global config
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/error.php');

        $content= file_get_contents('view/pages/error-404.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_error_404_type_2(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'ERROR 404 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Error 404', //this title to breadcrumb
            'info'          =>'access is denied', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->csseErrorPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuError404T2' =>'active',
            'selectError404T2'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/error-404-type-2.php');
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

    public function page_error_500(){

        $library = Array(
            'title'         =>'ERROR 500| BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url() //assign the base url from global config
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/error.php');

        $content= file_get_contents('view/pages/error-500.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_error_500_type_2(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'ERROR 500 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Error 500', //this title to breadcrumb
            'info'          =>'internal server error', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->csseErrorPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuError500T2' =>'active',
            'selectError500T2'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/pages/error-500-type-2.php');
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

    public function page_signin(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIGN IN | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'<script src="'.$pathLevelPlugins.'jquery-validation/dist/jquery.validate.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'pages/blankon.sign.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url() //assign the base url from global config
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/page-signin.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_signin_type_2(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIGN IN TYPE 2 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInType2Path(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'<script src="'.$pathLevelPlugins.'jquery-validation/dist/jquery.validate.min.js"></script>
                               <script src="'.$pathLevelPlugins.'jquery-backstretch/jquery.backstretch.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'pages/blankon.sign.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.sign.type2.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url() //assign the base url from global config
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/page-signin.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_signup(){

        $library = Array(
            'title'         =>'SIGN UP | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>'',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url() //assign the base url from global config
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/page-signup.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_lost_password(){

        $library = Array(
            'title'         =>'LOST PASSWORD | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>'',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url() //assign the base url from global config
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/lost-password.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_lock_screen(){

        $library = Array(
            'title'         =>'LOCK SCREEN | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>'',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url() //assign the base url from global config
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/lock-screen.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function form_element(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM ELEMENT | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Elements', //this title to breadcrumb
            'info'          =>'form elements and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                            ' <link href="'.$pathLevelPlugins.'bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet">
                              <link href="'.$pathLevelPlugins.'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css" rel="stylesheet">
                              <link href="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js"></script>
                                <script src="'.$pathLevelPlugins.'holderjs/holder.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery-autosize/jquery.autosize.min.js"></script>
                                <script src="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.jquery.min.js"></script>
                            ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.element.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormElement' =>'active',
            'selectFormElement'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/forms/element.php');
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

    public function form_advanced(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM ADVANCED | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Advanced', //this title to breadcrumb
            'info'          =>'form advanced plugins', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                            '<link href="'.$pathLevelPlugins.'dropzone/downloads/css/dropzone.css" rel="stylesheet">
                            <link href="'.$pathLevelPlugins.'bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">
                            <link href="'.$pathLevelPlugins.'bootstrap-datepicker-vitalets/css/datepicker.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'dropzone/downloads/dropzone.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery.inputmask/dist/jquery.inputmask.bundle.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js"></script>
                                ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.advanced.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormAdvanced' =>'active',
            'selectFormAdvanced'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/forms/advanced.php');
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

    public function form_layout(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM LAYOUT | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Layouts', //this title to breadcrumb
            'info'          =>'variant form layouts', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                              '<link href="'.$pathLevelPlugins.'bootstrap-fileupload/css/bootstrap-fileupload.min.css" rel="stylesheet">
                               <link href="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'bootstrap-fileupload/js/bootstrap-fileupload.min.js"></script>
                                <script src="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.jquery.min.js"></script>
                                ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormLayout' =>'active',
            'selectFormLayout'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/forms/layout.php');
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

    public function form_validation(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM VALIDATION | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Validations', //this title to breadcrumb
            'info'          =>'form validation samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.jquery.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery-mockjax/jquery.mockjax.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery-validation/dist/jquery.validate.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.validation.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormValidation' =>'active',
            'selectFormValidation'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/forms/validation.php');
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
    public function form_wizard(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM WIZARD | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Wizard', //this title to breadcrumb
            'info'          =>'form wizard sample', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'jquery-validation/dist/jquery.validate.min.js"></script>
                                <script src="'.$pathLevelPlugins.'twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.wizard.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormWizard' =>'active',
            'selectFormWizard'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/forms/wizard.php');
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
    public function form_wysiwyg(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM WYSIWYG | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'WYSIWYG', //this title to breadcrumb
            'info'          =>'form text editor', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                               '<link href="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'summernote/dist/summernote.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
                                <script src="'.$pathLevelPlugins.'summernote/dist/summernote.min.js"></script>',
             /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.wysiwyg.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuWysiwyg' =>'active',
            'selectWysiwyg'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/forms/wysiwyg.php');
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
    public function form_xeditable(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM X-EDITABLE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'X-Editable', //this title to breadcrumb
            'info'          =>'In-place editing with Twitter Bootstrap', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                                '<link href="'.$pathLevelPlugins.'select2-ng/select2.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'select2-ng/select2-bootstrap.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/address/address.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => ' <script src="'.$pathLevelPlugins.'jquery-mockjax/jquery.mockjax.js"></script>
                                <script src="'.$pathLevelPlugins.'moment/min/moment.min.js"></script>
                                <script src="'.$pathLevelPlugins.'select2-ng/select2.min.js"></script>
                                <script src="'.$pathLevelPlugins.'smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
                                <script src="'.$pathLevelPlugins.'x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
                                <script src="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
                                <script src="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
                                <script src="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/address/address.js"></script>',
                                    /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.xeditable.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuEditable' =>'active',
            'selectEditable'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/forms/xeditable.php');
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
    public function table_default(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'DEFAULT TABLE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Table', //this title to breadcrumb
            'info'          =>'basic table samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
* load the js of level plugins
*/
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuTableDefault' =>'active',
            'selectTableDefault'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/tables/default.php');
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
    public function table_color(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'COLOR TABLE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Table Color', //this title to breadcrumb
            'info'          =>'basic table samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
* load the js of level plugins
*/
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuTableColor' =>'active',
            'selectTableColor'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/tables/color.php');
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
    public function table_datatable(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'DATATABLE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Datatable', //this title to breadcrumb
            'info'          =>'responsive datatable samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$pathLevelPlugins.'datatables/css/dataTables.bootstrap.css" rel="stylesheet">
                            <link href="'.$pathLevelPlugins.'datatables/css/datatables.responsive.css" rel="stylesheet">
                            <link href="'.$pathLevelPlugins.'fuelux/dist/css/fuelux.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '
                            <script src="'.$pathLevelPlugins.'datatables/js/jquery.dataTables.min.js"></script>
                            <script src="'.$pathLevelPlugins.'datatables/js/dataTables.bootstrap.js"></script>
                            <script src="'.$pathLevelPlugins.'datatables/js/datatables.responsive.js"></script>
                            <script src="'.$pathLevelPlugins.'fuelux/dist/js/fuelux.min.js"></script>',
            /*
* load the js of level plugins
*/
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.table.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuDatatable' =>'active',
            'selectDatatable'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/tables/datatable.php');
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

    public function maps_google(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'GOOGLE MAPS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Google Map', //this title to breadcrumb
            'info'          =>'google map samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
                                <script src="'.$pathLevelPlugins.'gmap3/dist/gmap3.min.js"></script>',
            /*
* load the js of level plugins
*/
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.maps.google.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuMapsGoogle' =>'active',
            'selectMapsGoogle'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/maps/google.php');
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

    public function maps_vector(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'VECTOR MAPS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Vector Map', //this title to breadcrumb
            'info'          =>'interactive vector map samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$pathLevelPlugins.'jqvmap/jqvmap.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'jqvmap/jquery.vmap.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.world.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.usa.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.russia.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.algeria.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.germany.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.africa.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.asia.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.australia.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.europe.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/data/jquery.vmap.sampledata.js"></script>',
            /*
* load the js of level plugins
*/
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.maps.vector.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuMapsVector' =>'active',
            'selectMapsVector'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/maps/vector.php');
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

    public function chart_float(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FLOT CHARTS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Flot Charts', //this title to breadcrumb
            'info'          =>'visual charts & graphs', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'flot/jquery.flot.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.spline.min.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.tooltip.min.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.resize.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.categories.js"></script>
                                <script src="'.$pathLevelPlugins.'flot/jquery.flot.pie.js"></script>',
/*
* load the js of level plugins
*/
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.chart.flot.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuChartFlot' =>'active',
            'selectChartFlot'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/charts/flot.php');
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

    public function chart_morris(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MORRIS CHARTS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Morris Charts', //this title to breadcrumb
            'info'          =>'visual charts & graphs', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$pathLevelPlugins.'morrisjs/morris.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => ' <script src="'.$pathLevelPlugins.'raphael/raphael-min.js"></script>
                                 <script src="'.$pathLevelPlugins.'morrisjs/morris.min.js"></script>',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.chart.morris.js""></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuChartMorris' =>'active',
            'selectChartMorris'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/charts/morris.php');
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

    public function chart_chartjs(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'CHARTJS CHARTS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Chartjs', //this title to breadcrumb
            'info'          =>'visual charts & graphs', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'chartjs/Chart.min.js"></script>',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.chart.chartjs.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuChartChartjs' =>'active',
            'selectChartChartjs'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/charts/chartjs.php');
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
    public function chart_c3js(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'C3JS CHARTS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'C3js chart ', //this title to breadcrumb
            'info'          =>'visual charts & graphs', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$pathLevelPlugins.'c3js-chart/c3.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'d3/d3.min.js" charset="utf-8"></script>
                                <script src="'.$pathLevelPlugins.'c3js-chart/c3.min.js"></script>',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.chart.c3.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuChartC3js' =>'active',
            'selectChartC3js'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/charts/c3js.php');
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

    public function grid_system(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'GRID SYSTEM | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Grid Layout ', //this title to breadcrumb
            'info'          =>'grid system support', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'jquery/dist/jquery.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery-cookie/jquery.cookie.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap/dist/js/bootstrap.min.js"></script>
                                <script src="'.$pathLevelPlugins.'typehead.js/dist/handlebars.js"></script>
                                <script src="'.$pathLevelPlugins.'typehead.js/dist/typeahead.bundle.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery-nicescroll/jquery.nicescroll.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery.sparkline.min/index.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery-easing-original/jquery.easing.1.3.min.js"></script>
                                <script src="'.$pathLevelPlugins.'ionsound/js/ion.sound.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootbox/bootbox.js"></script>',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuGridSystem' =>'active',
            'selectGridSystem'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/grid-system.php');
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

    public function buttons(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'BUTTONS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Buttons ', //this title to breadcrumb
            'info'          =>'general ui components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuButtons' =>'active',
            'selectButtons'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/buttons.php');
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

    public function typography(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'TYPOGRAPHY | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Typography ', //this title to breadcrumb
            'info'          =>'general ui components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$pathLevelPlugins.'google-code-prettify/bin/prettify.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'google-code-prettify/bin/prettify.min.js"></script>',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.typography.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuTypography' =>'active',
            'selectTypography'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/typography.php');
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

    public function panels(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'PANELS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Panel', //this title to breadcrumb
            'info'          =>'general ui components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$pathLevelPlugins.'c3js-chart/c3.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuPanels' =>'active',
            'selectPanels'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/panels.php');
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

    public function alerts(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'ALERTS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Alerts', //this title to breadcrumb
            'info'          =>'general ui components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuAlerts' =>'active',
            'selectAlerts'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/alerts.php');
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

    public function modals(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MODALS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Modals ', //this title to breadcrumb
            'info'          =>'general ui components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuModals' =>'active',
            'selectModals'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/modals.php');
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

    public function video(){
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'VIDEO | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Video ', //this title to breadcrumb
            'info'          =>'responsive embed', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuVideo' =>'active',
            'selectVideo'=>'class="selected"',
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
        $content= file_get_contents('view/component/video.php');
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

    public function tabs_accordion(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'TABS & ACCORDION | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Tabs & Accordion ', //this title to breadcrumb
            'info'          =>'general ui components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuTabsAccordion' =>'active',
            'selectTabsAccordion'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/tabs-accordion.php');
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

    public function sliders(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SLIDERS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Sliders', //this title to breadcrumb
            'info'          =>'general ui components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'        <link href="'.$pathLevelPlugins.'ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'ion.rangeSlider/js/ion.rangeSlider.min.js"></script>',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.slider.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSliders' =>'active',
            'selectSliders'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/sliders.php');
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
    public function glyphicons(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'GLYPHICONS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Glyphicons', //this title to breadcrumb
            'info'          =>'icon components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssGlyphiconsPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuGlyphicons' =>'active',
            'selectGlyphicons'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/glyphicons.php');
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
    public function glyphicons_pro(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'GLYPHICONS PRO | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Glyphicons Pro', //this title to breadcrumb
            'info'          =>'icon components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$this->config->getBase_url().'assets/commercial/plugins/glyphicons-pro/glyphicons/web/html_css/css/glyphicons.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssGlyphiconsPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuGlyphiconsPro' =>'active',
            'selectGlyphiconsPro'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/glyphicons-pro.php');
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
    public function font_awesome(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FONT AWESOME | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Font Awesome', //this title to breadcrumb
            'info'          =>'icon components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'        <link href="'.$pathLevelPlugins.'ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFontAwesome' =>'active',
            'selectFontAwesome'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/font-awesome.php');
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
    public function weather_icon(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'WEATHER ICONS| BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Weather Icons ', //this title to breadcrumb
            'info'          =>'icon components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'        <link href="'.$pathLevelPlugins.'weather-icons/css/weather-icons.min.css"" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssWeatherPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuWeatherIcons' =>'active',
            'selectWeatherIcons'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/weather-icons.php');
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
    public function map_icons(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'ICONS MAP  | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Icons Map', //this title to breadcrumb
            'info'          =>'Icon font for use with Google Maps API', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'        <link href="'.$pathLevelPlugins.'map-icons/css/map-icons.css"" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
                                <script src="'.$pathLevelPlugins.'map-icons/js/map-icons.min.js"></script>',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.maps.icon.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuMapIcons' =>'active',
            'selectMapIcons'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/map-icons.php');
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
    public function simple_line_icons(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIMPLE LINE ICONS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Simple Line Icons', //this title to breadcrumb
            'info'          =>'icon components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'        <link href="'.$pathLevelPlugins.'simple-line-icons/css/simple-line-icons.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssSimpleLineIconsPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSimpleLineIcons' =>'active',
            'selectSimpleLineIcons'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/simple-line-icons.php');
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

    public function others(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'OTHER COMPONENT | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Other Component ', //this title to breadcrumb
            'info'          =>'general ui components', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuOthers' =>'active',
            'selectOthers'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/component/others.php');
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

    public function blank_page(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'BLANK PAGE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blank Page ', //this title to breadcrumb
            'info'          =>'blank page sample', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuBlankPage' =>'active',
            'selectBlankPage'=>'class="selected"','sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/layout/blank-page.php');
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

    public function boxed_page(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'BOXED PAGE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Boxed Page', //this title to breadcrumb
            'info'          =>'boxed layout sample', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuBoxedPage' =>'active',
            'selectBoxedPage '=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-boxed',
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
        $content= file_get_contents('view/layout/boxed-page.php');
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

    public function header_fixed_page(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'HEADER FIXED PAGE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Header Fixed Page ', //this title to breadcrumb
            'info'          =>'header fixed position', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuHeaderFixedPage' =>'active',
            'selectHeaderFixedPage'=>'class="selected"',
            'body'=>'page-header-fixed','sidebar'=>'sidebar-circle',

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
        $content= file_get_contents('view/layout/header-fixed-page.php');
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

    public function sidebar_fixed_page(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIDEBAR FIXED PAGE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Sidebar Fixed Page ', //this title to breadcrumb
            'info'          =>'Sidebar fixed position', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSidebarFixedPage' =>'active',
            'selectSidebarFixedPage'=>'class="selected"',
            'body'=>'page-sidebar-fixed  page-header-fixed',
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
        $content= file_get_contents('view/layout/sidebar-fixed-page.php');
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

    public function sidebar_minimize_page(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIDEBAR MINIMIZE PAGE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Sidebar Minimize Page ', //this title to breadcrumb
            'info'          =>'with minimize sidebar', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSidebarMinimizePage' =>'active',
            'selectSidebarMinimizePage'=>'class="selected"',
            'body'=>'page-sidebar-minimize','sidebar'=>'sidebar-circle',
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
        $content= file_get_contents('view/layout/sidebar-minimize-page.php');
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

    public function sidebar_default_page(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIDEBAR DEFAULT PAGE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blank Page ', //this title to breadcrumb
            'info'          =>'blank page sample', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSidebarDefaultPage' =>'active',
            'selectSidebarDefaultPage'=>'class="selected"','sidebar'=>'',

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
        $content= file_get_contents('view/layout/sidebar-default-page.php');
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

    public function sidebar_box_page(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIDEBAR BOX PAGE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blank Page ', //this title to breadcrumb
            'info'          =>'blank page sample', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSidebarBoxPage' =>'active',
            'selectSidebarBoxPage'=>'class="selected"',
            'sidebar'=>'sidebar-box',

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
        $content= file_get_contents('view/layout/sidebar-box-page.php');
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

    public function layout_sidebar_rounded(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIDEBAR ROUNDED PAGE  | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blank Page ', //this title to breadcrumb
            'info'          =>'blank page sample', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuLayoutSidebarRounded' =>'active',
            'selectLayoutSidebarRounded'=>'class="selected"',
            'sidebar'=>'sidebar-rounded',

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
        $content= file_get_contents('view/layout/sidebar-rounded-page.php');
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

    public function layout_sidebar_circle(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIDEBAR CIRCLE PAGE  | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blank Page ', //this title to breadcrumb
            'info'          =>'blank page sample', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuLayoutSidebarCircle' =>'active',
            'selectLayoutSidebarCircle'=>'class="selected"',
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
        $content= file_get_contents('view/layout/sidebar-circle-page.php');
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
    public function layout_footer_fixed(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FOOTER FIXED PAGE  | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blank Page ', //this title to breadcrumb
            'info'          =>'blank page sample', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuLayoutFooterFixed' =>'active',
            'selectLayoutFooterFixed'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-footer-fixed',

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
        $content= file_get_contents('view/layout/footer-fixed-page.php');
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
    public function overview(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'OVERVIEW WIDGET | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Overview Widget', //this title to breadcrumb
            'info'          =>'overview widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '
                            <script src="'.$pathLevelPlugins.'raphael/raphael-min.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.spline.min.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.categories.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.tooltip.min.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.resize.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.pie.js"></script>
                            <script src="'.$pathLevelPlugins.'morrisjs/morris.min.js"></script>
            ',
                                    /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.widgets.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuOverview' =>'active',
            'selectOverview'=>'class="selected"',
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
        $content= file_get_contents('view/widget/overview.php');
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
    public function social(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SOCIAL WIDGET| BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Social Widget  ', //this title to breadcrumb
            'info'          =>'social widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssTimelinePath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSocial' =>'active',
            'selectSocial'=>'class="selected"',
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
        $content= file_get_contents('view/widget/social.php');
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
    public function blog(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'BLOG WIDGET | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blog Widget ', //this title to breadcrumb
            'info'          =>'blog widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuBlog' =>'active',
            'selectBlog'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/widget/blog.php');
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
    public function weather(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'WEATHER WIDGET | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Weather Widget ', //this title to breadcrumb
            'info'          =>'weather widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$pathLevelPlugins.'weather-icons/css/weather-icons.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'skycons-html5/skycons.js"></script>',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.widget.weather.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuWeather' =>'active',
            'selectWeather'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/widget/weather.php');
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
    public function misc(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MISC WIDGET | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Misc Widget  ', //this title to breadcrumb
            'info'          =>'miscellanous widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuMisc' =>'active',
            'selectMisc'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session',
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
        $content= file_get_contents('view/widget/misc.php');
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
