<?php

namespace app\assets\admin\widget;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelWeatherAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/weather-icons/css/weather-icons.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/skycons-html5/skycons.js',
        'admin/js/pages/blankon.widget.weather.js'
    ];

}
