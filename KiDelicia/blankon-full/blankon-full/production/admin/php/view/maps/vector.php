<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-globe"></i> {page}<span>{info}</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="dashboard.html">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Maps</a>
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
            <a href="http://jvectormap.com/" target="_blank">jVectorMap</a> uses only native browser technologies like JavaScript, CSS, HTML, SVG or VML.
        </div>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start world map -->
        <div class="panel rounded shadow panel-danger">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">World Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <div id="world-map" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End world map -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-6">

        <!-- Start USA map -->
        <div class="panel rounded shadow panel-success">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">USA Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <div id="usa-map" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End USA map -->

    </div>
    <div class="col-md-6">

        <!-- Start Rusia map -->
        <div class="panel rounded shadow panel-lilac">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Rusia Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <div id="rusia-map" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End Rusia map -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-6">

        <!-- Start Algeria map -->
        <div class="panel rounded shadow panel-primary">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Algeria Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <div id="algeria-map" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End Algeria map -->

    </div>
    <div class="col-md-6">

        <!-- Start Germany map -->
        <div class="panel rounded shadow panel-warning">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Germany Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <div id="germany-map" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End Germany map -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start continents map -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Continents Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">

                <div class="panel panel-tab panel-tab-double panel-tab-vertical row no-margin no-box-shadow">
                    <!-- Start tabs heading -->
                    <div class="panel-heading no-padding col-md-3">
                        <ul class="nav nav-tabs" id="continents">
                            <li class="active">
                                <a href="#asia" data-toggle="tab">
                                    <i class="fa fa-map-marker"></i>
                                    <div>
                                        <span class="text-strong">Zona 1</span>
                                        <span>Asia continent</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#europe" data-toggle="tab">
                                    <i class="fa fa-map-marker"></i>
                                    <div>
                                        <span class="text-strong">Zona 2</span>
                                        <span>Europe continent</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#australia" data-toggle="tab">
                                    <i class="fa fa-map-marker"></i>
                                    <div>
                                        <span class="text-strong">Zona 3</span>
                                        <span>Australia continent</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#africa" data-toggle="tab">
                                    <i class="fa fa-map-marker"></i>
                                    <div>
                                        <span class="text-strong">Zona 4</span>
                                        <span>Africa continent</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#northamerica" data-toggle="tab">
                                    <i class="fa fa-map-marker"></i>
                                    <div>
                                        <span class="text-strong">Zona 5</span>
                                        <span>North America continent</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#southamerica" data-toggle="tab">
                                    <i class="fa fa-map-marker"></i>
                                    <div>
                                        <span class="text-strong">Zona 6</span>
                                        <span>South America continent</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ End tabs heading -->

                    <!-- Start tabs content -->
                    <div class="panel-body col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="asia">
                                <h4>Asia continent</h4>
                                <div id="asia-map" class="map-continent"></div>
                            </div>
                            <div class="tab-pane fade" id="europe">
                                <h4>Europe continent</h4>
                                <div id="europe-map" class="map-continent"></div>
                            </div>
                            <div class="tab-pane fade" id="australia">
                                <h4>Australia continent</h4>
                                <div id="australia-map" class="map-continent"></div>
                            </div>
                            <div class="tab-pane fade" id="africa">
                                <h4>Africa continent</h4>
                                <div id="africa-map" class="map-continent"></div>
                            </div>
                            <div class="tab-pane fade" id="northamerica">
                                <h4>North America continent</h4>
                                <div id="northamerica-map" class="map-continent"></div>
                            </div>
                            <div class="tab-pane fade" id="southamerica">
                                <h4>South America continent</h4>
                                <div id="southamerica-map" class="map-continent"></div>
                            </div>
                        </div>
                    </div>
                    <!--/ End tabs content -->
                </div>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End continents map -->

    </div>
</div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->
