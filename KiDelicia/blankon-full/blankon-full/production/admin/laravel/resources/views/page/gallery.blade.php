@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-picture-o"></i> Gallery <span>gallery style</span></h2>
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
                <li class="active">Gallery</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <button class="filter btn btn-primary btn-sm" data-filter="all">All</button>
                <button class="filter btn btn-primary btn-sm" data-filter=".category-people">People</button>
                <button class="filter btn btn-primary btn-sm" data-filter=".category-food">Food</button>
                <button class="filter btn btn-primary btn-sm" data-filter=".category-animal">Animal</button>
                <button class="filter btn btn-primary btn-sm" data-filter=".category-nature">Nature</button>
                <button class="filter btn btn-primary btn-sm" data-filter="none">None</button>
            </div>
            <div class="pull-right">
                <button class="sort btn btn-danger btn-sm" data-sort="random">Random</button>
                <button class="sort btn btn-danger btn-sm" data-sort="value:asc">Ascending</button>
                <button class="sort btn btn-danger btn-sm" data-sort="value:desc">Descending</button>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <ul id="gallery">
                            <li class="mix category-people">
                                <div class="gallery-item rounded shadow">
                                    <span class="gallery-love">
                                        <i class="fa fa-heart-o"></i>
                                    </span>
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/people/6.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="gallery-author">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="{{$assetUrl}}global/img/avatar/35/2.png">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading text-capitalize">john kribo</h4>
                                                <span class="text-capitalize">rocker</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-animal" data-value="3">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/animals/1.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                        </div>
                                    </div>
                                    <div class="gallery-author">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="{{$assetUrl}}global/img/avatar/35/3.png">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading text-capitalize">jennifer poiyem</h4>
                                                <span class="text-capitalize">model</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-people" data-value="5">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/people/7.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                        </div>
                                    </div>
                                    <div class="gallery-author">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="{{$assetUrl}}global/img/avatar/35/4.png">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading text-capitalize">clara wati</h4>
                                                <span class="text-capitalize">photography</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-animal" data-value="7">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/animals/4.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Excepteur sint occaecat cupidatat non proident.</p>
                                        </div>
                                    </div>
                                    <div class="gallery-author">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="{{$assetUrl}}global/img/avatar/35/5.png">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading text-capitalize">toni mriang</h4>
                                                <span class="text-capitalize">gamer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-people" data-value="9">
                                <div class="gallery-item rounded shadow">
                                    <span class="gallery-love">
                                        <i class="fa fa-heart-o"></i>
                                    </span>
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/people/8.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                        </div>
                                    </div>
                                    <div class="gallery-author">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="{{$assetUrl}}global/img/avatar/35/6.png">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading text-capitalize">bella negoro</h4>
                                                <span class="text-capitalize">fashion</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-food" data-value="2">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/food/6.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                        </div>
                                    </div>
                                    <div class="gallery-author">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="{{$assetUrl}}global/img/avatar/35/7.png">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading text-capitalize">kim mbako</h4>
                                                <span class="text-capitalize">tukang sate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-animal" data-value="4">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/animals/6.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-food" data-value="6">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/food/7.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam.</p>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-food" data-value="8">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/food/8.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-nature" data-value="10">
                                <div class="gallery-item rounded shadow">
                                    <span class="gallery-love">
                                        <i class="fa fa-heart-o"></i>
                                    </span>
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/nature/3.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Et harum quidem rerum facilis est et expedita distinctio.</p>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-people" data-value="11">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/people/9.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-people" data-value="12">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/people/10.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p>Temporibus autem quibusdam et aut officiis debitis.</p>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                            <li class="mix category-nature" data-value="13">
                                <div class="gallery-item rounded shadow">
                                    <a href="javascript:void(0);" class="gallery-img"><img src="{{$assetUrl}}global/img/nature/4.jpg" class="img-responsive full-width" alt="..." /></a>
                                    <div class="gallery-details">
                                        <div class="gallery-summary">
                                            <p> Itaque earum rerum hic tenetur a sapiente delectus.</p>
                                        </div>
                                    </div>
                                </div><!-- /.gallery-item -->
                            </li>
                        </ul>

    <p class="text-center"><img src="{{$assetUrl}}global/img/loader/general/2.gif" alt="..."/> Load more post</p>

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
