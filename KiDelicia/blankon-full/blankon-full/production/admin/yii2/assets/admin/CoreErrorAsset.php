<?php

namespace app\assets\admin;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class CoreErrorAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css',
    ];
    public $js = [
        ''
    ];

}
