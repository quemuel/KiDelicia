@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start header content -->
    <div class="header-content">
        <h2><i class="fa fa-dropbox"></i>Blankon Versions <span>All within bundle</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Blankon Versions</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <!--/ End header content -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row mt-20 mb-20">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-center">
                    <a href="../../../../admin/html/dashboard.html" target="_blank"><img src="{{$assetUrl}}admin/img/version/html-version.png" alt="html version"/></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <h4>HTML Version <span class="label label-success hidden-xs">AVAILABLE</span></h4>
                <p>
                    HTML or HyperText Markup Language is the standard markup language used to create web pages. HTML is written in the form of HTML elements consisting of tags enclosed in angle brackets. The first tag in a pair is the start tag, and the second tag is the end tag (they are also called opening tags and closing tags).
                </p>
                <a href="../../../../admin/html/dashboard.html" class="btn btn-success" target="_blank">Let's See</a>
                <a href="http://en.wikipedia.org/wiki/HTML" class="btn btn-warning" target="_blank">Readmore</a>
            </div>
        </div>
        <div class="row mb-20">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-center">
                    <a href="../../../../admin/angularjs/#/dashboard" target="_blank"><img src="{{$assetUrl}}admin/img/version/angularjs-version.png" alt="angularjs version"/></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <h4>AngularJS Version <span class="label label-success hidden-xs">AVAILABLE</span></h4>
                <p>
                    AngularJS is an open-source web application framework, maintained by Google and community, that assists with creating single-page applications, which consist of one HTML page with CSS, and JavaScript on the client side. Its goal is to simplify both development and testing of web applications by providing client-side model–view–controller (MVC) capability as well as providing structure for the entire development process, from design through testing.
                </p>
                <a href="../../../../admin/angularjs/#/dashboard" class="btn btn-success" target="_blank">Let's See</a>
                <a href="http://en.wikipedia.org/wiki/AngularJS" class="btn btn-warning" target="_blank">Readmore</a>
                <a href="https://angularjs.org/" class="btn btn-primary hidden-xs" target="_blank">Official Website</a>
            </div>
        </div>
        <div class="row mb-20">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-center">
                    <a href="../../../../admin/yii2/web/index.php?r=admin%2Fdashboard%2Findex"><img src="{{$assetUrl}}admin/img/version/yii-version.png" alt="yii version"/></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <h4>Yii Framework Version <span class="label label-success hidden-xs">AVAILABLE</span></h4>
                <p>
                    Yii is a free, open-source Web application development framework written in PHP5 that promotes clean, DRY design and encourages rapid development. It works to streamline your application development and helps to ensure an extremely efficient, extensible, and maintainable end product.
                </p>
                <a href="../../../../admin/yii2/web/index.php?r=admin%2Fdashboard%2Findex" class="btn btn-success" target="_blank">Let's See</a>
                <a href="http://en.wikipedia.org/wiki/Yii" class="btn btn-warning" target="_blank">Readmore</a>
                <a href="http://www.yiiframework.com/" class="btn btn-primary hidden-xs" target="_blank">Official Website</a>
            </div>
        </div>
        <div class="row mt-20 mb-20">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="text-center">
                            <a href="#" target="_blank"><img src="{{$assetUrl}}admin/img/version/laravel-version.png" alt="laravel version"/></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9">
                        <h4>Laravel Framework Version <span class="label label-success hidden-xs">AVAILABLE</span></h4>
                        <p>
                            Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
                        </p>
                        <a href="#" class="btn btn-success disabled">Currently viewing ...</a>
                        <a href="http://en.wikipedia.org/wiki/Laravel" class="btn btn-warning" target="_blank">Readmore</a>
                        <a href="http://laravel.com/" class="btn btn-primary hidden-xs" target="_blank">Official Website</a>
                    </div>
                </div>
        <div class="row mb-20">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-center">
                    <a href="#" target="_blank"><img src="{{$assetUrl}}admin/img/version/ajax-version.png" alt="ajax version"/></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <h4>AJAX Version <span class="label label-success hidden-xs">AVAILABLE</span></h4>
                <p>
                    Ajax or short for asynchronous JavaScript + XML. is a group of interrelated Web development techniques used on the client-side to create asynchronous Web applications. With Ajax, Web applications can send data to, and retrieve data from, a server asynchronously (in the background) without interfering with the display and behavior of the existing page.
                </p>
                <a href="../../../../admin/ajax/#dashboard" class="btn btn-success" target="_blank">Let's See</a>
                <a href="http://en.wikipedia.org/wiki/Ajax_%28programming%29" class="btn btn-warning" target="_blank">Readmore</a>
            </div>
        </div>
        <div class="row mb-20">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-center">
                    <a href="#" target="_blank"><img src="{{$assetUrl}}admin/img/version/php-version.png" alt="php version"/></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <h4>PHP Version <span class="label label-danger">NEW</span></h4>
                <p>
                    PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. PHP code can be simply mixed with HTML code, or it can be used in combination with various templating engines and web frameworks.
                </p>
                <a href="../../../../admin/php/index.php" class="btn btn-success" target="_blank">Let's See</a>
                <a href="http://en.wikipedia.org/wiki/PHP" class="btn btn-warning" target="_blank">Readmore</a>
                <a href="http://php.net/" class="btn btn-primary hidden-xs" target="_blank">Official Website</a>
            </div>
        </div>
        <div class="row mb-20">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-center">
                    <a href="#" target="_blank"><img src="{{$assetUrl}}admin/img/version/codeigniter-version.png" alt="codeigniter version"/></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <h4>Codeigniter Framework Version</h4>
                <p>
                    CodeIgniter is an open source rapid development web application framework, for use in building dynamic web sites with PHP. CodeIgniter is loosely based on the popular Model-View-Controller development pattern. While view and controller classes are a necessary part of development under CodeIgniter, models are optional.
                </p>
                <a href="../../../../admin/codeigniter/index.php" class="btn btn-success" target="_blank">Let's See</a>
                <a href="http://en.wikipedia.org/wiki/CodeIgniter" class="btn btn-warning" target="_blank">Readmore</a>
                <a href="https://ellislab.com/codeigniter" class="btn btn-primary hidden-xs" target="_blank">Official Website</a>
            </div>
        </div>

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
