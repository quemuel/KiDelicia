<?php

use app\assets\admin\page\SignType2Asset;

/* @var $this \yii\web\View */
/* @var $content string */

SignType2Asset::register($this);
$this->title = 'SIGN IN TYPE 2 | BLANKON - Fullpack Admin Theme';
?>

<div id="sign-wrapper">

    <!-- Brand -->
    <div class="brand">
        <img src="<?= \Yii::getAlias('@asset') ?>/global/img/logo/yii/logo-vertical.png" alt="brand logo"/>
    </div>
    <!--/ Brand -->

    <!-- Login form -->
    <form class="sign-in form-horizontal shadow rounded no-overflow" action="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>" method="post">
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <span>Member Area</span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-header -->
        <div class="sign-body">
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="text" class="form-control input-sm" placeholder="Username or email " name="username">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="password" class="form-control input-sm" placeholder="Password" name="password">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-body -->
        <div class="sign-footer">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="ckbox ckbox-theme">
                            <input id="rememberme" type="checkbox">
                            <label for="rememberme" class="rounded">Remember me</label>
                        </div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/page/lostpassword') ?>" title="lost password">Lost password?</a>
                    </div>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">Sign In</button>
            </div><!-- /.form-group -->
        </div><!-- /.sign-footer -->
    </form><!-- /.form-horizontal -->
    <!--/ Login form -->

    <!-- Content text -->
    <p class="text-muted text-center sign-link">Need an account? <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/page/signup') ?>"> Sign up free</a></p>
    <!--/ Content text -->

</div><!-- /#sign-wrapper -->