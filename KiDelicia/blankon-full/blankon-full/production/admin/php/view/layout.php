<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- START @HEAD -->
<head>
    <!-- START @META SECTION -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="{description}">
    <meta name="keywords" content="{keywords}">
    <meta name="author" content="Djava UI">
    <title>{title}</title>
    <!--/ END META SECTION -->

    <!-- START @FAVICONS -->
    <link href="{url}assets/global/img/ico/php/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="{url}assets/global/img/ico/php/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="{url}assets/global/img/ico/php/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="{url}assets/global/img/ico/php/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="{url}assets/global/img/ico/php/apple-touch-icon.png" rel="shortcut icon">
    <!--/ END FAVICONS -->

    <!-- START @FONT STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
    <!--/ END FONT STYLES -->

    <!-- START @GLOBAL MANDATORY STYLES -->
    <link href="{url}assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--/ END GLOBAL MANDATORY STYLES -->

    <!-- START @PAGE LEVEL STYLES -->
    {css}
    <!--/ END PAGE LEVEL STYLES -->

    <!-- START @THEME STYLES -->
   {cssTheme}
    <!--/ END THEME STYLES -->

    <!-- START @IE SUPPORT -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{url}assets/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="{url}assets/global/plugins/bower_components/respond-minmax/dest/respond.min.js"></script>
    <![endif]-->
    <!--/ END IE SUPPORT -->
</head>
<!--/ END HEAD -->

<!--

|=========================================================================================================================|
|  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
|=========================================================================================================================|
|  01. @HEAD                        |  Container for all the head elements                                                |
|  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
|  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
|  04. @FONT STYLES                 |  Font from google fonts                                                             |
|  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
|  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
|  07. @THEME STYLES                |  The main theme css file                                                            |
|  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
|=========================================================================================================================|
|  09. @BODY                        |  Contains all the contents of an HTML document                                      |
|  10. @WRAPPER                     |  Wrapping page section                                                              |
|  11. @HEADER                      |  Header page section contains about logo, top navigation, notification menu         |
|  12. @SIDEBAR LEFT                |  Sidebar page section contains all sidebar menu left                                |
|  13. @PAGE CONTENT                |  Contents page section contains breadcrumb, content page, footer page               |
|  14. @SIDEBAR RIGHT               |  Sidebar page section contains all sidebar menu right                               |
|  15. @BACK TOP                    |  Element back to top and action                                                     |
|=========================================================================================================================|
|  16. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
|  17. @PAGE LEVEL PLUGINS          |  Specific 3rd party plugins script file                                             |
|  18. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
|=========================================================================================================================|

START @BODY
|=========================================================================================================================|
|  TABLE OF CONTENTS (Apply to body class)                                                                                |
|=========================================================================================================================|
|  01. page-boxed                   |  Page into the box is not full width screen                                         |
|  02. page-header-fixed            |  Header element become fixed position                                               |
|  03. page-sidebar-fixed           |  Sidebar element become fixed position with scroll support                          |
|  04. page-sidebar-minimize        |  Sidebar element become minimize style width sidebar                                |
|  05. page-footer-fixed            |  Footer element become fixed position with scroll support on page content           |
|  06. page-sound                   |  For playing sounds on user actions and page events                                 |
|=========================================================================================================================|

-->
<body class="{body}">

<!--[if lt IE 9]>
<p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- START @WRAPPER -->
<section id="wrapper">

<!-- START @HEADER -->
{header} <!-- /#header -->
<!--/ END HEADER -->

<!--

START @SIDEBAR LEFT
|=========================================================================================================================|
|  TABLE OF CONTENTS (Apply to sidebar left class)                                                                        |
|=========================================================================================================================|
|  01. sidebar-box               |  Variant style sidebar left with box icon                                              |
|  02. sidebar-rounded           |  Variant style sidebar left with rounded icon                                          |
|  03. sidebar-circle            |  Variant style sidebar left with circle icon                                           |
|=========================================================================================================================|

-->
{sidebarLeft}<!-- /#sidebar-left -->
<!--/ END SIDEBAR LEFT -->

<!-- START @PAGE CONTENT -->
<section id="page-content">

{content}<!-- /.body-content -->


<!-- Start footer content -->
{footer}<!-- /.footer-content -->
<!--/ End footer content -->

</section><!-- /#page-content -->
<!--/ END PAGE CONTENT -->

<!-- START @SIDEBAR RIGHT -->
{sidebarRight}<!-- /#sidebar-right -->
<!--/ END SIDEBAR RIGHT -->

</section><!-- /#wrapper -->
<!--/ END WRAPPER -->

<!-- START @BACK TOP -->
<div id="back-top" class="animated pulse circle">
    <i class="fa fa-angle-up"></i>
</div><!-- /#back-top -->
<!--/ END BACK TOP -->

<!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
<!-- START @CORE PLUGINS -->
{corePlugins}
<!--/ END CORE PLUGINS -->

<!-- START @PAGE LEVEL PLUGINS -->
{levelPlugins}
<!--/ END PAGE LEVEL PLUGINS -->

<!-- START @PAGE LEVEL SCRIPTS -->
{levelScript}
<!--/ END PAGE LEVEL SCRIPTS -->
<!--/ END JAVASCRIPT SECTION -->

<!-- START GOOGLE ANALYTICS -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55892530-1', 'auto');
    ga('send', 'pageview');

</script>
<!--/ END GOOGLE ANALYTICS -->

</body>
<!--/ END BODY -->

</html>