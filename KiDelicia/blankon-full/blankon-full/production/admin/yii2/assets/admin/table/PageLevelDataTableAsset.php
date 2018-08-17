<?php

namespace app\assets\admin\table;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelDataTableAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/datatables/css/dataTables.bootstrap.css',
        'global/plugins/bower_components/datatables/css/datatables.responsive.css',
        'global/plugins/bower_components/fuelux/dist/css/fuelux.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/datatables/js/jquery.dataTables.min.js',
        'global/plugins/bower_components/datatables/js/dataTables.bootstrap.js',
        'global/plugins/bower_components/datatables/js/datatables.responsive.js',
        'global/plugins/bower_components/fuelux/dist/js/fuelux.min.js'
    ];

}
