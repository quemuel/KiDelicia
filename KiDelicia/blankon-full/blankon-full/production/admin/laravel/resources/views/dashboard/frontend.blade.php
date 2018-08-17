@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')

<section id="page-content">

    <!-- Start header content -->
    <div class="header-content">
        <h2><i class="fa fa-leaf"></i>Frontend Themes <span>All within bundle</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Frontend Themes</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <!--/ End header content -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="#" class="list-frontend-theme">
                    <span class="image-bg coming-soon">
                        <span class="image-scroll"></span>
                    </span>
                    <h3 class="image-title">start page</h3>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="#" class="list-frontend-theme">
                    <span class="image-bg coming-soon">
                        <span class="corporate image-scroll"></span>
                    </span>
                    <h3 class="image-title">landing page</h3>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="#" class="list-frontend-theme">
                    <span class="image-bg coming-soon">
                        <span class="corporate image-scroll"></span>
                    </span>
                    <h3 class="image-title">corporate</h3>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="#" class="list-frontend-theme">
                    <span class="image-bg coming-soon">
                        <span class="corporate image-scroll"></span>
                    </span>
                    <h3 class="image-title">portfolio</h3>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="#" class="list-frontend-theme">
                    <span class="image-bg coming-soon">
                        <span class="corporate image-scroll"></span>
                    </span>
                    <h3 class="image-title">personal CV</h3>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="#" class="list-frontend-theme">
                    <span class="image-bg coming-soon">
                        <span class="corporate image-scroll"></span>
                    </span>
                    <h3 class="image-title">agency</h3>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="#" class="list-frontend-theme">
                    <span class="image-bg coming-soon">
                        <span class="corporate image-scroll"></span>
                    </span>
                    <h3 class="image-title">blog</h3>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="#" class="list-frontend-theme">
                    <span class="image-bg coming-soon">
                        <span class="corporate image-scroll"></span>
                    </span>
                    <h3 class="image-title">shop</h3>
                </a>
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
