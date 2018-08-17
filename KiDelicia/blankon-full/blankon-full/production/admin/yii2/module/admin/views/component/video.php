<?php

use app\assets\admin\component\VideoAsset;

VideoAsset::register($this);

$this->title = 'VIDEO | BLANKON - Fullpack Admin Theme';

?>


<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-video-camera"></i> Video <span>responsive embed</span></h2>
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
                <li class="active">Video</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-7">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Responsive Video</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                            <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding">
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-gmVFr8xygc"></iframe>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div>
            <div class="col-md-5">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Description</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                            <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <p>Allow browsers to determine video or slideshow dimensions based on the width of their containing block by creating an intrinsic ratio that will properly scale on any device.</p>
                        <p>Rules are directly applied to <code>&lt;iframe&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;video&gt;</code>, and <code>&lt;object&gt;</code> elements; optionally use an explicit descendant class <code>.embed-responsive-item</code> when you want to match the styling for other attributes.</p>
                        <p><strong>Pro-Tip!</strong> You don't need to include <code>frameborder="0"</code> in your <code>&lt;iframe&gt;</code>s as we override that for you.</p>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin') ;?>
    <!--/ End footer content -->

</section><!-- /#page-content -->