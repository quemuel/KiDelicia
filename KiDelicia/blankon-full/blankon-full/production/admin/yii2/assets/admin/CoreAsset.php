<?php

namespace app\assets\admin;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class CoreAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css',
    ];
    public $js = [ 'global/plugins/bower_components/jquery/dist/jquery.min.js',
        'global/plugins/bower_components/jquery-cookie/jquery.cookie.js',
        'global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'global/plugins/bower_components/typehead.js/dist/handlebars.js',
        'global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js',
        'global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js',
        'global/plugins/bower_components/jquery.sparkline.min/index.js',
        'global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js',
        'global/plugins/bower_components/ionsound/js/ion.sound.min.js',
        'global/plugins/bower_components/bootbox/bootbox.js'
    ];
    
    public $depends = [
        'app\assets\IE9Asset',
    ];

}
