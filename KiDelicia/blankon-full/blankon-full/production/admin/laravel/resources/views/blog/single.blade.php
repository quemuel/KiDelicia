@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-file-text"></i> Blog Single <span>blog single sample</span></h2>
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
                <li class="active">Blog Single</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row" id="blog-single">

            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

                <div class="panel panel-default panel-blog rounded shadow">
                    <div class="panel-body">
                        <h3 class="blog-title">Welcome to Sadranan Beach Yogyakarta</h3>
                        <ul class="blog-meta">
                            <li>By: <a href="">Phera</a></li>
                            <li>Jun 15, 2014</li>
                            <li><a href="">7 Comments</a></li>
                        </ul>
                        <div class="blog-img"><img src="{{$assetUrl}}global/img/uncategorized/2.jpg" class="img-responsive" alt="..."></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>

                    </div><!-- panel-body -->
                </div><!-- panel-blog -->

                <div class="blog-author">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object thumbnail" src="{{$assetUrl}}global/img/avatar/100/1.png" alt="...">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">About The Author</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div><!-- media -->
                </div><!-- blog-author -->

                <h5 class="comment-count">7 Comments</h5>

                <ul class="media-list comment-list">

                    <li class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object thumbnail" src="{{$assetUrl}}global/img/avatar/50/10.png" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#" class="btn btn-success btn-xs pull-right rounded">Reply</a>
                            <h4>Daddy Botak</h4>
                            <small class="text-muted">Juni 16, 2014 at 7:30am</small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </li><!-- media -->

                    <li class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object thumbnail" src="{{$assetUrl}}global/img/avatar/50/11.png" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#" class="btn btn-success btn-xs pull-right rounded">Reply</a>
                            <h4>Sarah Tingting</h4>
                            <small class="text-muted">Juni 16, 2014 at 7:30am</small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object thumbnail" src="{{$assetUrl}}global/img/avatar/50/12.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="btn btn-success btn-xs pull-right rounded">Reply</a>
                                    <h4>Harry Potret</h4>
                                    <small class="text-muted">Juni 16, 2014 at 7:30am</small>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div><!-- media -->

                        </div>
                    </li><!-- media -->

                    <li class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object thumbnail" src="{{$assetUrl}}global/img/avatar/50/13.png" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#" class="btn btn-success btn-xs pull-right rounded">Reply</a>
                            <h4>Claudia Cinta</h4>
                            <small class="text-muted">Juni 17, 2014 at 6:30am</small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object thumbnail" src="{{$assetUrl}}global/img/avatar/50/14.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="btn btn-success btn-xs pull-right rounded">Reply</a>
                                    <h4>Daniel Miring</h4>
                                    <small class="text-muted">Juni 17, 2014 at 6:30am</small>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object thumbnail" src="{{$assetUrl}}global/img/avatar/50/15.png" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="btn btn-success btn-xs pull-right rounded">Reply</a>
                                            <h4>Jeck Joko</h4>
                                            <small class="text-muted">Juni 17, 2014 at 6:30am</small>
                                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div><!-- media -->

                                </div><!-- media-body -->
                            </div><!-- media -->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object thumbnail" src="{{$assetUrl}}global/img/avatar/50/16.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="btn btn-success btn-xs pull-right rounded">Reply</a>
                                    <h4>Tenny Imoet</h4>
                                    <small class="text-muted">Juni 17, 2014 at 6:30am</small>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div><!-- media -->

                        </div><!-- media-body -->

                    </li><!-- media -->

                </ul><!-- comment-list -->
                <br/>
                <h5 class="comment-title mb-5">Leave A Comment</h5>
                <p class="text-muted">Your email address will not be published.</p>
                <div class="mb-20"></div>

                <form class="form-horizontal mb-20" role="form">
                    <div class="form-group no-margin">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-15" placeholder="Name"/>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-15" placeholder="Email"/>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-15" placeholder="Website"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title"/>
                    </div>
                    <div class="form-group">
                        <textarea id="comment-form" class="form-control" rows="5" placeholder="Comment goes here ..."></textarea>
                    </div>
                    <div class="form-group no-margin no-padding">
                        <button type="submit" class="btn btn-success pull-right rounded">Add Comment</button>
                    </div>
                </form>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="blog-sidebar">
                    <h5 class="blog-subtitle">Title</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                    <div class="panel panel-theme shadow">
                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>
                        <div class="panel-body no-padding">
                            <div class="list-group no-margin">
                                <a href="#" class="list-group-item">
                                    Nature
                                </a>
                                <a href="#" class="list-group-item">Entertainment</a>
                                <a href="#" class="list-group-item">Technology</a>
                                <a href="#" class="list-group-item">Food &amp; Health</a>
                                <a href="#" class="list-group-item">Movies &amp; TV Shows</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-theme shadow">
                        <div class="panel-heading">
                            <h3 class="panel-title">Archives</h3>
                        </div>
                        <div class="panel-body no-padding">
                            <div class="list-group no-margin">
                                <a href="#" class="list-group-item">Juni 2014</a>
                                <a href="#" class="list-group-item">Mei 2014</a>
                                <a href="#" class="list-group-item">April 2014</a>
                                <a href="#" class="list-group-item">March 2014</a>
                                <a href="#" class="list-group-item">February 2014</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-theme shadow blog-list-slider">
                        <div class="panel-heading">
                            <h3 class="panel-title">NEWS & UPDATES</h3>
                        </div>
                        <div id="carousel-blog-list" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-blog-list" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-blog-list" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="blog-list">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="{{$assetUrl}}global/img/technology/1.jpg" alt="..." class="img-responsive img-thumbnail"/>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="{{url('blog/single')}}" title="Lorem ipsum dolor sit">Lorem ipsum dolor sit</a></h4>
                                                <small class="media-desc">Amet, consectetur adipisicing elit, sed do ut labore et dolore magna aliqua...</small>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="{{$assetUrl}}global/img/technology/2.jpg" alt="..." class="img-responsive img-thumbnail"/>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="{{url('blog/single')}}" title="Ut enim ad minim veniam">Ut enim ad minim veniam</a></h4>
                                                <small class="media-desc">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo...</small>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="{{$assetUrl}}global/img/technology/3.jpg" alt="..." class="img-responsive img-thumbnail"/>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="{{url('blog/single')}}" title="Duis aute irure dolor">Duis aute irure dolor</a></h4>
                                                <small class="media-desc">In reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-list">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="{{$assetUrl}}global/img/animals/2.jpg" alt="..." class="img-responsive img-thumbnail"/>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="{{url('blog/single')}}" title="Excepteur sint occaecat cupidatat">Excepteur sint occaecat cupidatat</a></h4>
                                                <small class="media-desc">Sunt in culpa qui officia deserunt mollit anim id est laborum...</small>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="{{$assetUrl}}global/img/animals/3.jpg" alt="..." class="img-responsive img-thumbnail"/>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="{{url('blog/single')}}" title="Sed ut perspiciatis unde">Sed ut perspiciatis unde</a></h4>
                                                <small class="media-desc">Omnis iste natus error sit voluptatem accusantium...</small>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="{{$assetUrl}}global/img/animals/4.jpg" alt="..." class="img-responsive img-thumbnail"/>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="{{url('blog/single')}}" title="Totam rem aperiam">Totam rem aperiam</a></h4>
                                                <small class="media-desc">eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.blog-list-slider -->

                </div><!-- blog-sidebar -->

            </div>

        </div><!-- row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
