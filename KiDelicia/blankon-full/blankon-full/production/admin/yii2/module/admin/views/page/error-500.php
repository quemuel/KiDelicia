<?php

use app\assets\admin\page\ErrorAsset;

ErrorAsset::register($this);

$this->title = 'ERROR 500 | BLANKON - Fullpack Admin Theme';

?>
<div class="error-wrapper">
    <h1>500</h1>
    <h3>Internal Server Error.</h3>
    <h4>Sorry, something went wrong.</h4>
    <a href="<?= Yii::$app->getUrlManager()->createUrl('site/index') ?>" class="btn btn-sm btn-theme">Return to Home</a>
    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>" class="btn btn-sm btn-theme">Go to Dashboard</a>
</div>