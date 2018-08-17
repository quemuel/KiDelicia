<?php

namespace app\assets\admin\maps;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelGoogleAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css'
    ];
    public $js = [
        'http://maps.googleapis.com/maps/api/js?sensor=false',
        'global/plugins/bower_components/gmap3/dist/gmap3.min.js'
    ];

}
