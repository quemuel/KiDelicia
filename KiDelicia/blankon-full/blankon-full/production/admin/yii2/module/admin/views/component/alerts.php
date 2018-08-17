<?php

use app\assets\admin\component\AlertsAsset;

AlertsAsset::register($this);

$this->title = 'ALERTS | BLANKON - Fullpack Admin Theme';
?>


<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-info-circle"></i> Alerts <span>general ui components</span></h2>
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
                <li class="active">Alerts</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">

                <div class="callout callout-info mb-20">
                    Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
                </div>
                <!-- Start contextual classes -->
                <h4>Contextual classes</h4>
                <p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>
                <div class="panel panel-default rounded shadow">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="alert alert-success">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-info">
                                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                </div>
                                <div class="alert alert-warning">
                                    <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                </div>
                                <div class="alert alert-danger">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-default">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-lilac">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-inverse">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-teals">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End contextual classes -->

                <!-- Start dismissable alert -->
                <h4>Dismissable alerts</h4>
                <p>Build on any alert by adding an optional <code>.alert-dismissable</code> and close button.</p>
                <div class="panel panel-default rounded shadow">
                    <div class="panel-body">
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Warning!</strong> Better check yourself, you're not looking too good.
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End dismissable alert -->

                <!-- Start links in alerts -->
                <h4>Links in alerts</h4>
                <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
                <div class="panel panel-default rounded shadow">
                    <div class="panel-body">
                        <div class="alert alert-success">
                            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                        </div>
                        <div class="alert alert-info">
                            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                        </div>
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                        </div>
                        <div class="alert alert-danger">
                            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End links in alerts -->

                <!-- Start with icons -->
                <h4>With icons</h4>
                <div class="panel panel-default rounded shadow">
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Pack Suparman</a></span> send you a mail </li>
                                    <li class="pull-right notification-time">5 min ago</li>
                                </ul>
                                <p>Blueprint for next project</p>
                            </div>
                        </div><!-- /.alert -->
                        <div class="alert alert-success">
                            <span class="alert-icon"><i class="fa fa-twitter"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Jennifer Poiyem</a></span> mentioned you in a post </li>
                                    <li class="pull-right notification-time">2 Hours Ago</li>
                                </ul>
                                <p>
                                    Love you so much :P
                                </p>
                            </div>
                        </div><!-- /.alert -->
                        <div class="alert alert-danger ">
                            <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender">You have 2 message unread</li>
                                    <li class="pull-right notification-time">1 min ago</li>
                                </ul>
                                <p>
                                    <a href="#">Tenny Imoet, Leli Madang, Rebecca Cabean</a> and <a href="#">3 others</a>
                                </p>
                            </div>
                        </div><!-- /.alert -->
                        <div class="alert alert-warning ">
                            <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender">Website has been server down</li>
                                    <li class="pull-right notification-time">7 Days Ago</li>
                                </ul>
                                <p>
                                    Urgent for repair website
                                </p>
                            </div>
                        </div><!-- /.alert -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End with icons -->

                <!-- Start callout alerts -->
                <h4>Callout alerts</h4>
                <div class="panel panel-default rounded shadow">
                    <div class="panel-body">
                        <div class="callout callout-info">
                            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                        </div>
                        <div class="callout callout-warning">
                            <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                        </div>
                        <div class="callout callout-danger">
                            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End callout alerts -->

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin'); ?>
    <!--/ End footer content -->

</section><!-- /#page-content -->