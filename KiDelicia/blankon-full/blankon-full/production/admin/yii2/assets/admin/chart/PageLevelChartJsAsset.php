<?php

namespace app\assets\admin\chart;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelChartJsAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/chartjs/Chart.min.js'
    ];

}
