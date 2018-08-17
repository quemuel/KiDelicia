<?php

namespace app\assets\admin\form;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelWizardAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js',
        'global/plugins/bower_components/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
    ];

}
