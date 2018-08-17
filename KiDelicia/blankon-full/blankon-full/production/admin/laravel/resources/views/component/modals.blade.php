@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-circle-o-notch"></i> Modals <span>general ui components</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Components</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Modals</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <!-- Start contextual classes modal -->
        <div class="row">
            <div class="col-md-12">

                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Contextual Classes Modal</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">

                                <div class="bs-example-modal">
                                    <div class="modal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Default</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-theme">Save changes</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div><!-- /.bs-example-modal -->

                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">

                                <div class="bs-example-modal">
                                    <div class="modal modal-primary">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Primary</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div><!-- /.bs-example-modal -->

                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">

                                <div class="bs-example-modal">
                                    <div class="modal modal-success">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Success</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success">Save changes</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div><!-- /.bs-example-modal -->

                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">

                                <div class="bs-example-modal">
                                    <div class="modal modal-info">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Info</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-info">Save changes</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div><!-- /.bs-example-modal -->

                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">

                                <div class="bs-example-modal">
                                    <div class="modal modal-warning">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Warning</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-warning">Save changes</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div><!-- /.bs-example-modal -->

                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">

                                <div class="bs-example-modal">
                                    <div class="modal modal-danger">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Danger</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Save changes</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div><!-- /.bs-example-modal -->

                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">

                                <div class="bs-example-modal">
                                    <div class="modal modal-lilac">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Lilac</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-lilac">Save changes</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div><!-- /.bs-example-modal -->

                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">

                                <div class="bs-example-modal">
                                    <div class="modal modal-teal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Teal</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-teal">Save changes</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div><!-- /.bs-example-modal -->

                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->

            </div>
        </div><!-- /.row -->
        <!--/ End contextual classes modal -->

        <div class="row">
            <div class="col-md-4 col-sm-6">

                <!-- Start optional sizes modal -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Optional Sizes</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <p>Modals have two optional sizes</p>
                    </div><!-- /.panel-body -->
                    <div class="panel-footer">

                        <button class="btn btn-theme" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                        <button class="btn btn-theme" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

                    </div><!-- /.panel-footer -->
                </div><!-- /.panel -->
                <!--/ End optional sizes modal -->

            </div>
            <div class="col-md-4 col-sm-6">

                <!-- Start tabs in modal -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Tabs In Modal</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <p>A dynamic tab functionality inside a modal.</p>
                    </div><!-- /.panel-body -->
                    <div class="panel-footer">

                        <button class="btn btn-theme" data-toggle="modal" data-target=".bs-example-modal-tabs">Launch modal</button>

                    </div><!-- /.panel-footer -->
                </div>
                <!--/ End tabs in modal -->

            </div>
            <div class="col-md-4 col-sm-6">

                <!-- Start accordion in modal -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Accordion In Modal</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <p>A collapsible components inside a modal.</p>
                    </div><!-- /.panel-body -->
                    <div class="panel-footer">

                        <button class="btn btn-theme" data-toggle="modal" data-target=".bs-example-modal-accordion">Launch modal</button>

                    </div><!-- /.panel-footer -->
                </div><!-- /.panel -->
                <!--/ End accordion in modal -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-4 col-sm-6">

                            <!-- Start multiple modal overlay -->
                            <div class="panel rounded shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Multiple modal overlay</h3>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <p>Example markup for two Bootstrap modals.</p>
                                </div>
                                <div class="panel-footer">

                                    <button class="btn btn-theme" data-toggle="modal" data-target=".bs-example-modal-multiple">Launch modal</button>

                                </div>
                            </div>
                            <!--/ End multiple modal overlay -->

                        </div>
                        <div class="col-md-4 col-sm-6">

                            <!-- Start table in modal -->
                            <div class="panel rounded shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Table In Modal</h3>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <p>A responsive table components inside a modal.</p>
                                </div>
                                <div class="panel-footer">

                                    <button class="btn btn-theme" data-toggle="modal" data-target=".bs-example-modal-table">Launch modal</button>

                                </div>
                            </div>
                            <!--/ End table in modal -->

                        </div>
                        <div class="col-md-4 col-sm-6">

                            <!-- Start photo viewer modal -->
                            <div class="panel rounded shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Photo Viewer Modal</h3>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <p>A facebook like photo viewer with details on right.</p>
                                </div>
                                <div class="panel-footer">

                                    <button class="btn btn-theme" data-toggle="modal" data-target=".bs-example-modal-photo">Launch modal</button>

                                </div>
                            </div>
                            <!--/ End photo viewer modal -->

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






