<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-signal"></i> {page}<span>{info}</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="dashboard.html">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Charts</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">{page}</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-info mb-20">
                <a href="http://c3js.org/" target="_blank">C3.js</a> D3-based reusable chart library, C3 enables deeper integration of charts into your application.
            </div>
        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-6">

            <!-- Start line chart -->
            <div class="panel rounded shadow panel-success">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Line</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                        <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="c3js-line-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End line chart -->

        </div>
        <div class="col-md-6">

            <!-- Start bar chart -->
            <div class="panel rounded shadow panel-warning">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Bar</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                        <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="c3js-bar-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End bar chart -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-6">

            <!-- Start area chart -->
            <div class="panel rounded shadow panel-info">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Area</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                        <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="c3js-area-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End area chart -->

        </div>
        <div class="col-md-6">

            <!-- Start stacked chart -->
            <div class="panel rounded shadow panel-primary">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Stacked</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                        <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="c3js-stacked-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End stacked chart -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-6">

            <!-- Start pie chart -->
            <div class="panel rounded shadow panel-success">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Pie</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                        <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="c3js-pie-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End pie chart -->

        </div>
        <div class="col-md-6">

            <!-- Start donut chart -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Donut</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                        <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="c3js-donut-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End donut chart -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-12">

            <!-- Start combination chart -->
            <div class="panel rounded shadow panel-danger">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Combination</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                        <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="c3js-combination-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End combination chart -->

        </div>
    </div><!-- /.row -->
</div><!-- /.body-content -->
<!--/ End body content -->
