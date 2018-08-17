<?php

namespace app\assets\admin\form;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelAdvancedAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/dropzone/downloads/css/dropzone.css',
        'global/plugins/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css',
        'global/plugins/bower_components/bootstrap-datepicker-vitalets/css/datepicker.css'
    ];
    public $js = [
        'global/plugins/bower_components/dropzone/downloads/dropzone.min.js',
        'global/plugins/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js',
        'global/plugins/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.min.js',
        'global/plugins/bower_components/bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js'
    ];

}
