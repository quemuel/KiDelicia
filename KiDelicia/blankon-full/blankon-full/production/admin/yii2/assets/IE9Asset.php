<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class IE9Asset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $jsOptions = ['condition' => 'lte IE9','position' => \yii\web\View::POS_HEAD];
    public $css = [
    ];
    public $js = [ 'global/plugins/bower_components/html5shiv/dist/html5shiv.min.js',
        'global/plugins/bower_components/respond-minmax/src/respond.js',
    ];

}
