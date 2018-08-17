<?php

use app\assets\admin\chart\ChartJsAsset;

ChartJsAsset::register($this);

$this->title = ' CHARTJS CHARTS | BLANKON - Fullpack Admin Theme';
?>


<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-signal"></i> Chartjs <span>visual charts & graphs</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Charts</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Chartjs</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-info mb-20">
                    <a href="http://www.chartjs.org/" target="_blank">Chart.js</a> is Simple HTML5 Charts using the canvas element.
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">

                <!-- Start bar chart -->
                <div class="panel rounded shadow panel-danger">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Bar</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <canvas id="chartjs-bar-chart" height="300" width="600" class="chartjs"></canvas>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End bar chart -->

            </div>
            <div class="col-md-6">

                <!-- Start doughnut chart -->
                <div class="panel rounded shadow panel-warning">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Doughnut</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <canvas id="chartjs-doughnut-chart" height="300" width="600" class="chartjs"></canvas>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End doughnut chart -->

            </div>

        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">

                <!-- Start line chart -->
                <div class="panel rounded shadow panel-lilac">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Line</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <canvas id="chartjs-line-chart" height="300" width="600" class="chartjs"></canvas>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End line chart -->

            </div>
            <div class="col-md-6">

                <!-- Start pie chart -->
                <div class="panel rounded shadow panel-primary">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Pie</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <canvas id="chartjs-pie-chart" height="300" width="600" class="chartjs"></canvas>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End pie chart -->

            </div>

        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">

                <!-- Start polar area chart -->
                <div class="panel rounded shadow panel-success">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Polar Area</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <canvas id="chartjs-polararea-chart" height="300" width="600" class="chartjs"></canvas>
                    </div>
                </div>
                <!--/ End polar area chart -->

            </div>
            <div class="col-md-6">

                <!-- Start radar chart -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Radar</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <canvas id="chartjs-radar-chart" height="300" width="600" class="chartjs"></canvas>
                    </div>
                </div>
                <!--/ End radar chart -->

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin'); ?>
    <!--/ End footer content -->

</section><!-- /#page-content -->