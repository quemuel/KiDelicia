<?php

namespace app\assets\admin\component;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelSlidersAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/ion.rangeSlider/css/ion.rangeSlider.css'
    ];
    public $js = [
        'global/plugins/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js'
    ];

}
