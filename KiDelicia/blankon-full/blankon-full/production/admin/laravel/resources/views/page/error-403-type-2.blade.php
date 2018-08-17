@extends('layouts.lay_admin')

<!-- START @ERROR PAGE -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-ban"></i>Error 403 <span>access is denied</span></h2>
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
                <li class="active">Error 403</li>
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
                    <h1>403!</h1>
                    <h3>Forbidden: Access is denied.</h3>
                    <h4>You do not have permission to view this directory or page using the creditials that you supplied.</h4>
                </div>
                <!--/ END ERROR PAGE -->

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
