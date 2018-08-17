<?php

namespace app\assets\admin\page;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelCalendarAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
                    'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
                    'global/plugins/bower_components/animate.css/animate.min.css',
                    'global/plugins/bower_components/bootstrap-calendar/css/calendar.min.css',
                    'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css'
                ];
    public $js = [  
                    'global/plugins/bower_components/jsTimezoneDetect/jstz.min.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/nl-NL.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/fr-FR.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/de-DE.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/el-GR.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/it-IT.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/pl-PL.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/pt-BR.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/ro-RO.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/es-MX.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/es-ES.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/ru-RU.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/sv-SE.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/zh-CN.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/cs-CZ.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/ko-KR.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/language/id-ID.js',
                    'global/plugins/bower_components/bootstrap-calendar/js/calendar.js',
                    'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js'
                ];

}
