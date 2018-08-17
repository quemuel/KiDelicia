@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-file-text"></i> Blog Grid <span>blog grid type and post samples</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Blog Grid</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div id="blog-grid" class="row">

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item rounded shadow">
                    <a href="blog-single.html" class="blog-img"><img src="{{$assetUrl}}global/img/nature/1.jpg" class="img-responsive full-width" alt="..." /></a>
                    <div class="blog-details">
                        <div class="ribbon-wrapper">
                            <div class="ribbon ribbon-danger">Hot News</div>
                        </div>
                        <h4 class="blog-title"><a href="">Getting Started With Twitter Bootstrap</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">7 Comments</a></li>
                        </ul>
                        <div class="blog-summary">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a href="blog-single.html" class="btn btn-sm btn-success">Read More</a>
                        </div>
                    </div>
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-primary">
                        <a href="blog-single.html">
                            Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.
                            <small class="quote-author">- Steve Jobs -</small>
                        </a>
                    </div>
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">3 Comments</a></li>
                        </ul>
                    </div><!-- blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item rounded shadow">
                    <a href="blog-single.html" class="blog-img"><img src="{{$assetUrl}}global/img/people/2.jpg" class="img-responsive" alt="..." /></a>
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="">Beautiful Beach in Kuta Bali</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">20 Comments</a></li>
                        </ul>
                        <div class="blog-summary">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="blog-single.html" class="btn btn-sm btn-success">Read More</a>
                        </div>
                    </div>
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item rounded shadow">
                    <div id="carousel-blog-post" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carousel-blog-post" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-blog-post" data-slide-to="1"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{$assetUrl}}global/img/nature/2.jpg" class="img-responsive" alt="..." />
                                <div class="carousel-caption">
                                    I am
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{$assetUrl}}global/img/nature/5.jpg" class="img-responsive" alt="..." />
                                <div class="carousel-caption">
                                    Be Happy :D
                                </div>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#carousel-blog-post" role="button" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-blog-post" role="button" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="blog-single.html">This is my Way! Don't stop me</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">2 Comments</a></li>
                        </ul>
                        <div class="blog-summary">
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae</p>
                            <a href="blog-single.html" class="btn btn-sm btn-success">Read More</a>
                        </div>
                    </div>
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item rounded shadow">
                    <div class="blog-video">
                        <iframe src="//www.youtube.com/embed/ab0TSkLe-E0" allowfullscreen></iframe>
                    </div>
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="blog-single.html">New Zealand, Nature Landscapes</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">45 Comments</a></li>
                        </ul>
                        <div class="blog-summary">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="blog-single.html" class="btn btn-sm btn-success">Read More</a>
                        </div>
                    </div>
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-success">
                        <a href="blog-single.html">
                            Stay Hungry, Stay Foolish
                            <small class="quote-author">- Steve Jobs -</small>
                        </a>
                    </div>
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">2 Comments</a></li>
                        </ul>
                    </div><!-- blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item rounded shadow">
                    <a href="blog-single.html" class="blog-img"><img src="{{$assetUrl}}global/img/technology/3.jpg" class="img-responsive" alt="..." /></a>
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="">Beginner's Guide to Responsive Web Design</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Dec 30, 2014</li>
                            <li><a href="">3 Comments</a></li>
                        </ul>
                        <div class="blog-summary">
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae</p>
                            <a href="blog-single.html" class="btn btn-sm btn-success">Read More</a>
                        </div>
                    </div>
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item rounded shadow">
                    <a href="blog-single.html" class="blog-img"><img src="{{$assetUrl}}global/img/realistic/4.jpg" class="img-responsive" alt="..." /></a>
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="">Getting Started With Blankon 1.0.0</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">5 Comments</a></li>
                        </ul>
                        <div class="blog-summary">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="blog-single.html" class="btn btn-sm btn-success">Read More</a>
                        </div>
                    </div>
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-danger">
                        <a href="blog-single.html">
                            Amanah itu saya terima dengan senang hati dan dengan penuh tanggung jawab.
                            <small class="quote-author">- Jokowi -</small>
                        </a>
                    </div>
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">9 Comments</a></li>
                        </ul>
                    </div><!-- blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item rounded shadow">
                    <a href="blog-single.html" class="blog-img"><img src="{{$assetUrl}}global/img/technology/4.jpg" class="img-responsive" alt="..." /></a>
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="">How to increase website traffic</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 10, 2014</li>
                            <li><a href="">32 Comments</a></li>
                        </ul>
                        <div class="blog-summary">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="blog-single.html" class="btn btn-sm btn-success">Read More</a>
                        </div>
                    </div>
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-lilac">
                        <a href="blog-single.html">
                            If you born poor, it’s not your mistake. But if you die poor, it’s your mistake
                            <small class="quote-author">- Bill Gates -</small>
                        </a>
                    </div>
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">49 Comments</a></li>
                        </ul>
                    </div><!-- blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item rounded shadow">
                    <a href="blog-single.html" class="blog-img"><img src="{{$assetUrl}}global/img/realistic/7.jpg" class="img-responsive" alt="..." /></a>
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="">How to make responsive design</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">18 Comments</a></li>
                        </ul>
                        <div class="blog-summary">
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae</p>
                            <a href="blog-single.html" class="btn btn-sm btn-success">Read More</a>
                        </div>
                    </div>
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-teal">
                        <a href="blog-single.html">
                            If you want to accomplish the goals of your life, you have to begin with the spirit
                            <small class="quote-author">- Oprah Winfrey -</small>
                        </a>
                    </div>
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">62 Comments</a></li>
                        </ul>
                    </div><!-- blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-item rounded shadow">
                    <a href="blog-single.html" class="blog-img"><img src="{{$assetUrl}}global/img/technology/5.jpg" class="img-responsive" alt="..." /></a>
                    <div class="blog-details">
                        <div class="ribbon-wrapper">
                            <div class="ribbon ribbon-success">New Post</div>
                        </div>
                        <h4 class="blog-title"><a href="">How Clean is Your Web Design?</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="http://djavaui.com/" target="_blank">Djava UI</a></li>
                            <li>Jun 08, 2014</li>
                            <li><a href="">2 Comments</a></li>
                        </ul>
                        <div class="blog-summary">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo consequat.</p>
                            <a href="blog-single.html" class="btn btn-sm btn-success">Read More</a>
                        </div>
                    </div>
                </div><!-- /.blog-item -->
            </div><!-- col-md-3 -->

        </div><!-- /.row -->

        <p class="text-center"><img src="{{$assetUrl}}global/img/loader/general/2.gif" alt="..."/> Load more post</p>

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
