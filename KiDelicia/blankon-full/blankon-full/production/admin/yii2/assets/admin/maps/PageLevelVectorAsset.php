<?php

namespace app\assets\admin\maps;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelVectorAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        'global/plugins/bower_components/animate.css/animate.min.css'
    ];
    public $js = [
        'global/plugins/bower_components/jqvmap/jquery.vmap.min.js',
        'global/plugins/bower_components/jqvmap/maps/jquery.vmap.world.js',
        'global/plugins/bower_components/jqvmap/maps/jquery.vmap.usa.js',
        'global/plugins/bower_components/jqvmap/maps/jquery.vmap.russia.js',
        'global/plugins/bower_components/jqvmap/maps/jquery.vmap.algeria.js',
        'global/plugins/bower_components/jqvmap/maps/jquery.vmap.germany.js',
        'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.africa.js',
        'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.asia.js',
        'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.australia.js',
        'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.europe.js',
        'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.north-america.js',
        'global/plugins/bower_components/jqvmap/maps/continents/jquery.vmap.south-america.js',
        'global/plugins/bower_components/jqvmap/data/jquery.vmap.sampledata.js'
    ];

}
