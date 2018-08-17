<?php

use app\assets\admin\page\SignAsset;

SignAsset::register($this);

$this->title = 'LOCK SCREEN | BLANKON - Fullpack Admin Theme';
?>


<div id="sign-wrapper">

    <!-- Brand -->
    <div class="brand">
        <img src="<?= \Yii::getAlias('@asset') ?>/global/img/logo/yii/logo-vertical.png" alt="brand logo"/>
    </div>
    <!--/ Brand -->

    <!-- Login form -->
    <form class="lock form-horizontal rounded shadow" action="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <img src="<?= \Yii::getAlias('@asset') ?>/global/img/avatar/100/1.png" alt="admin" class="img-circle">
                    <p>Welcome Back - <strong>Tol Lee</strong></p>
                </div>
            </div>
        </div>
        <div class="sign-body">
            <div class="form-group">
                <div class="input-group input-group-lg rounded">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                </div>
            </div>
        </div>
        <div class="sign-footer">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="ckbox ckbox-theme">
                            <input id="rememberme" value="1" type="checkbox">
                            <label for="rememberme" class="rounded">Remember me</label>
                        </div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/page/lostpassword') ?>" title="lost password">Lost password?</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded">Unlock</button>
            </div>
        </div>
    </form>
    <!--/ Login form -->

</div><!-- /#sign-wrapper -->