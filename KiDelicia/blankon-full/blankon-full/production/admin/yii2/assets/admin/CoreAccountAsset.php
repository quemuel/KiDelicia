<?php

namespace app\assets\admin;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class CoreAccountAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css',
    ];
    public $js = [ 'global/plugins/bower_components/jquery/dist/jquery.min.js',
        'global/plugins/bower_components/jquery-cookie/jquery.cookie.js',
        'global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'global/plugins/bower_components/jpreloader/js/jpreloader.min.js',
        'global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js',
        'global/plugins/bower_components/ionsound/js/ion.sound.min.js',
    ];

}
