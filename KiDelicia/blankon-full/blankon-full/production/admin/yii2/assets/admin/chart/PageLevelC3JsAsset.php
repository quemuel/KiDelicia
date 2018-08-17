<?php

namespace app\assets\admin\chart;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelC3JsAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/c3js-chart/c3.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/d3/d3.min.js',
        'global/plugins/bower_components/c3js-chart/c3.min.js'
    ];

}
