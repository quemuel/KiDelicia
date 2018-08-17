<?php

namespace app\assets\admin\page;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelSearchCourseAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
 
    public $css = [
                    'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
                    'global/plugins/bower_components/animate.css/animate.min.css',
                    'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css'
                ];
    
  
    public $js = [  
                    'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.js',
                ];

}
