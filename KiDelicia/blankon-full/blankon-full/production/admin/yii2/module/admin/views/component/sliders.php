<?php

use app\assets\admin\component\SlidersAsset;

SlidersAsset::register($this);

$this->title = 'SLIDERS | BLANKON - Fullpack Admin Theme';

?>



<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-sliders"></i> Sliders <span>general ui components</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Components</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Sliders</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">

                <!-- Start basic slider -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Basic Slider</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">

                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="slider-theme">
                                        <input id="slider-1" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr/>
                        <h5>Sample basic slider</h5>
                        <form class="form-horizontal form-bordered">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="slider-theme">
                                        <input id="slider-2" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="slider-theme">
                                        <input id="slider-3" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="slider-theme">
                                        <input id="slider-4" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End basic slider -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">

                <!-- Start contextual classes slider -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Contextual Classes Slider</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">

                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Default Slider</label>
                                <div class="col-sm-7">
                                    <div class="slider-theme">
                                        <input id="default-slider" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Primary Slider</label>
                                <div class="col-sm-7">
                                    <div class="slider-primary">
                                        <input id="primary-slider" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Success Slider</label>
                                <div class="col-sm-7">
                                    <div class="slider-success">
                                        <input id="success-slider" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Info Slider</label>
                                <div class="col-sm-7">
                                    <div class="slider-info">
                                        <input id="info-slider" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Warning Slider</label>
                                <div class="col-sm-7">
                                    <div class="slider-warning">
                                        <input id="warning-slider" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Danger Slider</label>
                                <div class="col-sm-7">
                                    <div class="slider-danger">
                                        <input id="danger-slider" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Lilac Slider</label>
                                <div class="col-sm-7">
                                    <div class="slider-lilac">
                                        <input id="lilac-slider" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Teal Slider</label>
                                <div class="col-sm-7">
                                    <div class="slider-teal">
                                        <input id="teal-slider" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Inverse Slider</label>
                                <div class="col-sm-7">
                                    <div class="slider-inverse">
                                        <input id="inverse-slider" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End contextual classes slider -->

            </div>
            <div class="col-md-6">

                <!-- Start type slider -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Type Slider</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">

                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Bar Skin</label>
                                <div class="col-sm-7">
                                    <div class="slider-theme">
                                        <input id="type-slider-1" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Circle Skin</label>
                                <div class="col-sm-7">
                                    <div class="slider-theme circle">
                                        <input id="type-slider-2" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Donut Skin</label>
                                <div class="col-sm-7">
                                    <div class="slider-theme donut">
                                        <input id="type-slider-3" type="text" name="" value="" />
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End type slider -->

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin') ;?>
    <!--/ End footer content -->

</section><!-- /#page-content -->