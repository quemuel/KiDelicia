<?php

namespace app\assets\admin\chart;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelMorrisAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/morrisjs/morris.css'
    ];
    public $js = [
        'global/plugins/bower_components/raphael/raphael-min.js',
        'global/plugins/bower_components/morrisjs/morris.min.js'
    ];

}
