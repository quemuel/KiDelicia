<?php

namespace app\assets\admin\form;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelXeditableAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
        'global/plugins/bower_components/summernote/dist/summernote.css',
        'global/plugins/bower_components/select2-ng/select2.css',
        'global/plugins/bower_components/select2-ng/select2-bootstrap.css',
        'global/plugins/bower_components/smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
        'global/plugins/bower_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css',
        'global/plugins/bower_components/x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css',
        'global/plugins/bower_components/x-editable/dist/inputs-ext/address/address.css'
    ];
    public $js = [
        'global/plugins/bower_components/jquery-mockjax/jquery.mockjax.js',
        'global/plugins/bower_components/moment/min/moment.min.js',
        'global/plugins/bower_components/select2-ng/select2.min.js',
        'global/plugins/bower_components/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
        'global/plugins/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js',
        'global/plugins/bower_components/x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js',
        'global/plugins/bower_components/x-editable/dist/inputs-ext/typeaheadjs/typeaheadjs.js',
        'global/plugins/bower_components/x-editable/dist/inputs-ext/address/address.js'
    ];

}
