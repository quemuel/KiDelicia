<?php

namespace app\assets\admin\form;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelElementAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
        'global/plugins/bower_components/jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
        'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
        'global/plugins/bower_components/jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
        'global/plugins/bower_components/holderjs/holder.js',
        'global/plugins/bower_components/bootstrap-maxlength/bootstrap-maxlength.min.js',
        'global/plugins/bower_components/jquery-autosize/jquery.autosize.min.js',
        'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js'
    ];

}
