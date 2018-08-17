<?php

namespace app\assets\admin\form;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelValidationAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js',
        'global/plugins/bower_components/jquery-mockjax/jquery.mockjax.js',
        'global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js'
    ];

}
