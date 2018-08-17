<?php

namespace app\assets\admin\chart;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelFlotAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/flot/jquery.flot.js',
        'global/plugins/bower_components/flot/jquery.flot.spline.min.js',
        'global/plugins/bower_components/flot/jquery.flot.tooltip.min.js',
        'global/plugins/bower_components/flot/jquery.flot.resize.js',
        'global/plugins/bower_components/flot/jquery.flot.categories.js',
        'global/plugins/bower_components/flot/jquery.flot.pie.js'
    ];

}
