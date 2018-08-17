
<?php $this->beginPage() ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
        <meta name="keywords" content="">
        <meta name="author" content="Djava UI">
        <title><?= $this->title ?></title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/yii/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/yii/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/yii/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/yii/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/yii/apple-touch-icon.png" rel="shortcut icon">
        <!-- END FAVICONS -->

        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <?php $this->head();  ?>
        
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
	|  10. @LOADING ANIMATION           |  Loading animation when the page reload                                             |
	|  11. @WRAPPER                     |  Wrapping page section                                                              |
	|  12. @TOP BAR                     |  Top navigation contains logo and link sign                                         |
	|  13. @BANNER                      |  Banner landing page section                                                        |
	|  14. @TOP REASONS                 |  Top reasons feature page section                                                   |
	|  15. @BEAUTIFUL DESIGN            |  Feature 1 beautiful design                                                         |
	|  16. @RESPONSIVE LAYOUT           |  Feature 2 100% responsive layout                                                   |
	|  17. @PAGE INCLUDE                |  Feature 3 120+ page include                                                        |
	|  18. @COLOR SCHEMES               |  Feature 4 27 color schemes, 6 colors navbar and 6 colors sidebar                   |
	|  19. @FEATURES                    |  All feature blankon                                                                |
	|  20. @SUPPORTED RESOLUTIONS       |  Devices list supported resolutions                                                 |
	|  21. @SUMMARY                     |  Summary landing page section                                                       |
	|  22. @FOOTER                      |  Footer landing page section                                                        |
	|  23. @BACK TOP                    |  Element back to top and action                                                     |
	|=========================================================================================================================|
	|  24. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
	|  25. @PAGE LEVEL PLUGINS          |  Specific 3rd party plugins script file                                             |
	|  26. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
	|=========================================================================================================================|

    START @BODY
    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Apply to body class)                                                                                |
	|=========================================================================================================================|
    |  01. page-boxed                   |  Page into the box is not full width screen                                         |
	|  02. page-sound                   |  For playing sounds on user actions and page events                                 |
	|=========================================================================================================================|

	-->
        
    <body class="page-session page-sound page-header-fixed page-sidebar-fixed">
    <?php $this->beginBody() ?>
        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @HEADER -->
            <?php echo $this->render("_header-admin") ?>
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
            <?php echo $this->render("_sidebar-left") ;?>
            <!--/ END SIDEBAR LEFT -->
                
            <!-- START @PAGE CONTENT -->
            <?php echo $content ; ?>
            <!--/ END PAGE CONTENT -->

            <!-- START @SIDEBAR RIGHT -->
            <?php echo $this->render("_sidebar-right") ;?>
            <!--/ END SIDEBAR RIGHT -->

        </section><!-- /#wrapper -->
        <!--/ END WRAPPER -->

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

        
    <?php $this->endBody() ?>

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
<?php $this->endPage() ?>
