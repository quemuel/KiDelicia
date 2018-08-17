@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-table"></i> Table <span>basic table samples</span></h2>
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
                <li class="active">Table Default</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">
                <!-- Start table horizontal scroll -->
                <h4 class="mt-0">Sample Table</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-success">
                        <thead>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Progress</th>
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
                                    <div class="progress progress-xs no-margin">
                                        <div class="progress-bar progress-bar-theme" style="width: 45%;"></div>
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
                                    <div class="progress progress-xs no-margin">
                                        <div class="progress-bar progress-bar-theme" style="width: 78%;"></div>
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
                                    <div class="progress progress-xs no-margin">
                                        <div class="progress-bar progress-bar-theme" style="width: 45%;"></div>
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
                                    <div class="progress progress-xs no-margin">
                                        <div class="progress-bar progress-bar-theme" style="width: 78%;"></div>
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
                                    <div class="progress progress-xs no-margin">
                                        <div class="progress-bar progress-bar-theme" style="width: 23%;"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">6</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/7.png" class="img-circle img-bordered-theme" alt="Kim Mbako">
                                    <span>Kim Mbako</span>
                                </td>
                                <td>Angola</td>
                                <td>Project Manager</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star active"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="progress progress-xs no-margin">
                                        <div class="progress-bar progress-bar-theme" style="width: 56%;"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center border-right">7</td>
                                <td>
                                    <img src="{{$assetUrl}}global/img/avatar/35/8.png" class="img-circle img-bordered-theme" alt="Pack Suparman">
                                    <span>Pack Suparman</span>
                                </td>
                                <td>Indonesian</td>
                                <td>CEO</td>
                                <td class="text-center">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="progress progress-xs no-margin">
                                        <div class="progress-bar progress-bar-theme" style="width: 90%;"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center border-right">No.</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Position</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Progress</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End table horizontal scroll -->
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <!-- Start basic table -->
                <h4 class="no-margin">Basic example</h4>
                <p>For basic styling add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
                <div class="table-responsive mb-20">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End basic table -->

            </div>
            <div class="col-md-6">

                <!-- Start striped table -->
                <h4 class="no-margin">Striped rows</h4>
                <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
                <div class="table-responsive mb-20">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End striped table -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">

                <!-- Start bordered table -->
                <h4 class="no-margin">Bordered table</h4>
                <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
                <div class="table-responsive mb-20">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End bordered table -->

            </div>
            <div class="col-md-6">

                <!-- Start hover table -->
                <h4 class="no-margin">Hover rows</h4>
                <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
                <div class="table-responsive mb-20">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End hover table -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <!-- Start condensed table -->
                <h4 class="no-margin">Table with checkbox</h4>
                <p>An example of table with checkbox in every rows.</p>
                <div class="table-responsive mb-20">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 45px">
                        <div class="ckbox ckbox-success">
                            <input id="checkbox1" type="checkbox">
                            <label for="checkbox1"></label>
                        </div>
                        </th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="ckbox ckbox-success">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2"></label>
                                    </div>
                                </td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="ckbox ckbox-success">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="ckbox ckbox-success">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4"></label>
                                    </div>
                                </td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End condensed table -->

            </div>
            <div class="col-md-6">

                <!-- Start table with actions -->
                <h4 class="no-margin">Table with actions</h4>
                <p>An example of table with actions in every rows.</p>
                <div class="table-responsive mb-20">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th class="text-center" style="min-width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td class="text-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="view detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td class="text-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="view detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td class="text-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="view detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End table with actions -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <!-- Start contextual classes row -->
                <h4 class="no-margin">Contextual classes row</h4>
                <p>Use contextual classes to color <code>table rows</code>.</p>
                <div class="table-responsive mb-20">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 45px">#</th>
                                <th>Class Name</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="active">
                                <td class="text-center">1</td>
                                <td>active</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr class="success">
                                <td class="text-center">2</td>
                                <td>success</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr class="info">
                                <td class="text-center">3</td>
                                <td>info</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr class="warning">
                                <td class="text-center">4</td>
                                <td>warning</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr class="danger">
                                <td class="text-center">5</td>
                                <td>danger</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End contextual classes row -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <!-- Start contextual classes column -->
                <h4 class="no-margin">Contextual classes column</h4>
                <p>Use contextual classes to color table <code>individual cells</code>.</p>
                <div class="table-responsive mb-20">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 45px">#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="active">active</td>
                                <td class="success">success</td>
                                <td class="info">info</td>
                                <td class="warning">warning</td>
                                <td class="danger">danger</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="active">active</td>
                                <td class="success">success</td>
                                <td class="info">info</td>
                                <td class="warning">warning</td>
                                <td class="danger">danger</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="active">active</td>
                                <td class="success">success</td>
                                <td class="info">info</td>
                                <td class="warning">warning</td>
                                <td class="danger">danger</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="active">active</td>
                                <td class="success">success</td>
                                <td class="info">info</td>
                                <td class="warning">warning</td>
                                <td class="danger">danger</td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="active">active</td>
                                <td class="success">success</td>
                                <td class="info">info</td>
                                <td class="warning">warning</td>
                                <td class="danger">danger</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End contextual classes column -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">

                <!-- Start responsive table -->
                <h4 class="no-margin">Responsive tables</h4>
                <p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally up to small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>
                <div class="table-responsive mb-20">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End responsive table -->

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
