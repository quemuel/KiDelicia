<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-signal"></i> {page} <span>{info}</span></h2>
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
                <a href="http://morrisjs.github.io/morris.js/" target="_blank">Morris.js</a> is the library that powers the graphs on <a href="http://howmanyleft.co.uk/" target="_blank">howmanyleft</a>. It's a very simple API for drawing line, bar, area and donut charts.
            </div>
        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-6">

            <!-- Start line chart -->
            <div class="panel rounded shadow panel-danger">
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
                    <div id="morris-line-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End line chart -->

        </div>
        <div class="col-md-6">

            <!-- Start area chart -->
            <div class="panel rounded shadow panel-success">
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
                    <div id="morris-area-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End area chart -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-6">

            <!-- Start bar chart -->
            <div class="panel rounded shadow panel-lilac">
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
                    <div id="morris-bar-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End bar chart -->

        </div>
        <div class="col-md-6">

            <!-- Start donut chart -->
            <div class="panel rounded shadow panel-info">
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
                    <div id="morris-donut-chart" class="chart"></div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End donut chart -->

        </div>
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->
