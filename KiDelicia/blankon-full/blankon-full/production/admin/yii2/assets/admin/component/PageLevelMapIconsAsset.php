<?php

namespace app\assets\admin\component;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelMapIconsAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/map-icons/css/map-icons.css'
    ];
    public $js = [
        'http://maps.googleapis.com/maps/api/js?sensor=false',
        'global/plugins/bower_components/map-icons/js/map-icons.min.js'
    ];

}
