<?php

namespace app\assets\admin\form;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelLayoutAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/bootstrap-fileupload/css/bootstrap-fileupload.min.css',
        'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/bootstrap-fileupload/js/bootstrap-fileupload.min.js',
        'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js'
    ];

}
