@extends('layouts.lay_admin')

<!-- START @ERROR PAGE -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-ban"></i>Error 404 <span>page not found</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="dashboard.html">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Error 404</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">

                <!-- START @ERROR PAGE -->
                <div class="error-wrapper">
                    <h1>404!</h1>
                    <h3>The page you are looking for has not been found!</h3>
                    <h4>The page you are looking for might have been removed, or unavailable. <br> <br/> Maybe you could try a search:</h4>
                    <form action="#" class="form-horizontal">
                        <div class="form-group has-feedback no-padding">
                            <input type="text" class="form-control typeahead" placeholder="Search for page ">
                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                        </div>
                    </form>
                </div>
                <!--/ END @ERROR PAGE -->

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->

@stop
<!--/ END ERROR PAGE -->
