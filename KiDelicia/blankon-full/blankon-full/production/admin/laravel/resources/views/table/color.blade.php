@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-table"></i> Table Color <span>variant table colors</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Tables</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Table Color</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">

                <!-- Start basic color table -->
                <h4>Basic Color</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border-right">1</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                    <span>John Kribo</span>
                                </td>
                                <td>United State</td>
                                <td>Senior Web Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">2</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                    <span>Jennifer Poiyem</span>
                                </td>
                                <td>Spain</td>
                                <td>Senior UX Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">3</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                    <span>Clara Wati</span>
                                </td>
                                <td>United State</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">4</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                    <span>Toni Mriang</span>
                                </td>
                                <td>Germany</td>
                                <td>Assistant</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">5</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                    <span>Bella negoro</span>
                                </td>
                                <td>England</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End basic color table -->

                <!-- Start primary color table -->
                <h4>Primary Color</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-primary">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border-right">1</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                    <span>John Kribo</span>
                                </td>
                                <td>United State</td>
                                <td>Senior Web Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">2</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                    <span>Jennifer Poiyem</span>
                                </td>
                                <td>Spain</td>
                                <td>Senior UX Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">3</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                    <span>Clara Wati</span>
                                </td>
                                <td>United State</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">4</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                    <span>Toni Mriang</span>
                                </td>
                                <td>Germany</td>
                                <td>Assistant</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">5</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                    <span>Bella negoro</span>
                                </td>
                                <td>England</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End primary color table -->

                <!-- Start success color table -->
                <h4>Success Color</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-success">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border-right">1</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                    <span>John Kribo</span>
                                </td>
                                <td>United State</td>
                                <td>Senior Web Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">2</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                    <span>Jennifer Poiyem</span>
                                </td>
                                <td>Spain</td>
                                <td>Senior UX Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">3</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                    <span>Clara Wati</span>
                                </td>
                                <td>United State</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">4</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                    <span>Toni Mriang</span>
                                </td>
                                <td>Germany</td>
                                <td>Assistant</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">5</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                    <span>Bella negoro</span>
                                </td>
                                <td>England</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End success color table -->

                <!-- Start info color table -->
                <h4>Info Color</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-info">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border-right">1</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                    <span>John Kribo</span>
                                </td>
                                <td>United State</td>
                                <td>Senior Web Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">2</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                    <span>Jennifer Poiyem</span>
                                </td>
                                <td>Spain</td>
                                <td>Senior UX Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">3</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                    <span>Clara Wati</span>
                                </td>
                                <td>United State</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">4</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                    <span>Toni Mriang</span>
                                </td>
                                <td>Germany</td>
                                <td>Assistant</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">5</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                    <span>Bella negoro</span>
                                </td>
                                <td>England</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End info color table -->

                <!-- Start warning color table -->
                <h4>Warning Color</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-warning">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border-right">1</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                    <span>John Kribo</span>
                                </td>
                                <td>United State</td>
                                <td>Senior Web Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">2</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                    <span>Jennifer Poiyem</span>
                                </td>
                                <td>Spain</td>
                                <td>Senior UX Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">3</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                    <span>Clara Wati</span>
                                </td>
                                <td>United State</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">4</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                    <span>Toni Mriang</span>
                                </td>
                                <td>Germany</td>
                                <td>Assistant</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">5</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                    <span>Bella negoro</span>
                                </td>
                                <td>England</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End warning color table -->

                <!-- Start danger color table -->
                <h4>Danger Color</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-danger">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border-right">1</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                    <span>John Kribo</span>
                                </td>
                                <td>United State</td>
                                <td>Senior Web Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">2</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                    <span>Jennifer Poiyem</span>
                                </td>
                                <td>Spain</td>
                                <td>Senior UX Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">3</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                    <span>Clara Wati</span>
                                </td>
                                <td>United State</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">4</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                    <span>Toni Mriang</span>
                                </td>
                                <td>Germany</td>
                                <td>Assistant</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">5</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                    <span>Bella negoro</span>
                                </td>
                                <td>England</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End danger color table -->

                <!-- Start lilac color table -->
                <h4>Lilac Color</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-lilac">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border-right">1</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                    <span>John Kribo</span>
                                </td>
                                <td>United State</td>
                                <td>Senior Web Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">2</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                    <span>Jennifer Poiyem</span>
                                </td>
                                <td>Spain</td>
                                <td>Senior UX Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">3</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                    <span>Clara Wati</span>
                                </td>
                                <td>United State</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">4</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                    <span>Toni Mriang</span>
                                </td>
                                <td>Germany</td>
                                <td>Assistant</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">5</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                    <span>Bella negoro</span>
                                </td>
                                <td>England</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End lilac color table -->

                <!-- Start teal color table -->
                <h4>Teal Color</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-teal">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border-right">1</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                    <span>John Kribo</span>
                                </td>
                                <td>United State</td>
                                <td>Senior Web Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">2</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                    <span>Jennifer Poiyem</span>
                                </td>
                                <td>Spain</td>
                                <td>Senior UX Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">3</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                    <span>Clara Wati</span>
                                </td>
                                <td>United State</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">4</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                    <span>Toni Mriang</span>
                                </td>
                                <td>Germany</td>
                                <td>Assistant</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">5</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                    <span>Bella negoro</span>
                                </td>
                                <td>England</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End teal color table -->

                <!-- Start inverse color table -->
                <h4>Inverse Color</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-inverse">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border-right">1</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                    <span>John Kribo</span>
                                </td>
                                <td>United State</td>
                                <td>Senior Web Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">2</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                    <span>Jennifer Poiyem</span>
                                </td>
                                <td>Spain</td>
                                <td>Senior UX Designer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">3</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                    <span>Clara Wati</span>
                                </td>
                                <td>United State</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">4</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                    <span>Toni Mriang</span>
                                </td>
                                <td>Germany</td>
                                <td>Assistant</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">5</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                    <span>Bella negoro</span>
                                </td>
                                <td>England</td>
                                <td>Developer</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End inverse color table -->

            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
