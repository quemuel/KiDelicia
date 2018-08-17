<?php

/**
 * Description of Router
 *
 * @author Djava UI
 */
class config {
    /*
     * this is set a base url of this app
     */
    public function getBase_url(){
        $base_url='http://localhost/blankon-fullpack-admin-theme/1.0.7/';
        return $base_url;
    }

    /*
     * set a path from css the bower_components
     */
    public function cssBowerPath(){
        $bowerComponent="".$this->getBase_url()."assets/global/plugins/bower_components/";

        $css =' <link href="'.$bowerComponent.'fontawesome/css/font-awesome.min.css" rel="stylesheet">
                <link href="'.$bowerComponent.'animate.css/animate.min.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a default path css to admin page
     */
    public function cssSignInPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/sign.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    public function cssSignInType2Path(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/sign-type-2.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    public function cssAdminPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to frontend page
     */
    public function cssFrontendPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/frontend-themes.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to mail page
     */
    public function cssMailPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/mail.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to gallery page
     */
    public function cssGalleryPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/gallery.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to gallery page
     */
    public function cssFaqPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/faq.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to invoice page
     */
    public function cssInvoicePath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/invoice.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to message page
     */
    public function cssMessagesPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/messages.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to timeline page
     */
    public function cssTimelinePath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/timeline.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to search page
     */
    public function cssSearchPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/search.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to error page
     */
    public function csseErrorPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/error-page.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';

        return $css;
    }
    /*
     * set a path css to Glyphicons page
     */
    public function cssGlyphiconsPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/glyphicons.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to Weather page
     */
    public function cssWeatherPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/weather-icons.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path css to Simple Line Icons page
     */
    public function cssSimpleLineIconsPath(){
        $adminCSS="".$this->getBase_url()."assets/admin/css/";
        $css =' <link href="'.$adminCSS.'reset.css" rel="stylesheet">
                <link href="'.$adminCSS.'layout.css" rel="stylesheet">
                <link href="'.$adminCSS.'components.css" rel="stylesheet">
                <link href="'.$adminCSS.'plugins.css" rel="stylesheet">
                <link href="'.$adminCSS.'themes/php.theme.css" rel="stylesheet" id="theme">
                <link href="'.$adminCSS.'pages/icon.css" rel="stylesheet">
                <link href="'.$adminCSS.'custom.css" rel="stylesheet">';
        return $css;
    }
    /*
     * set a path core javascript of this app
     */
    public function corePluginsPath(){
        $bowerComponent="".$this->getBase_url()."assets/global/plugins/bower_components/";
        $js ='  <script src="'.$bowerComponent.'jquery/dist/jquery.min.js"></script>
                <script src="'.$bowerComponent.'jquery-cookie/jquery.cookie.js"></script>
                <script src="'.$bowerComponent.'bootstrap/dist/js/bootstrap.min.js"></script>
                <script src="'.$bowerComponent.'typehead.js/dist/handlebars.js"></script>
                <script src="'.$bowerComponent.'typehead.js/dist/typeahead.bundle.min.js"></script>
                <script src="'.$bowerComponent.'jquery-nicescroll/jquery.nicescroll.min.js"></script>
                <script src="'.$bowerComponent.'jquery.sparkline.min/index.js"></script>
                <script src="'.$bowerComponent.'jquery-easing-original/jquery.easing.1.3.min.js"></script>
                <script src="'.$bowerComponent.'ionsound/js/ion.sound.min.js"></script>
                <script src="'.$bowerComponent.'bootbox/bootbox.js"></script>';
        return $js;
    }
    /*
     * set a path core javascript to calendar page
     */
    public function corePluginsCalendarPath(){
        $bowerComponent="".$this->getBase_url()."assets/global/plugins/bower_components/";
        $js ='  <script src="'.$bowerComponent.'jquery/dist/jquery.min.js"></script>
                <script src="'.$bowerComponent.'jquery-cookie/jquery.cookie.js"></script>
                <script src="'.$bowerComponent.'underscore/underscore-min.js"></script>
                <script src="'.$bowerComponent.'bootstrap/dist/js/bootstrap.min.js"></script>
                <script src="'.$bowerComponent.'typehead.js/dist/handlebars.js"></script>
                <script src="'.$bowerComponent.'typehead.js/dist/typeahead.bundle.min.js"></script>
                <script src="'.$bowerComponent.'jquery-nicescroll/jquery.nicescroll.min.js"></script>
                <script src="'.$bowerComponent.'jquery.sparkline.min/index.js"></script>
                <script src="'.$bowerComponent.'jquery-easing-original/jquery.easing.1.3.min.js"></script>
                <script src="'.$bowerComponent.'ionsound/js/ion.sound.min.js"></script>
                <script src="'.$bowerComponent.'bootbox/bootbox.js"></script>';
        return $js;
    }

}

?>
