<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets\admin\component;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class FontAwesomeAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'admin/css/reset.css',
        'admin/css/layout.css',
        'admin/css/components.css',
        'admin/css/plugins.css',
        'admin/css/yii-custom.css',
        'admin/css/themes/default.theme.css',
        'admin/css/custom.css'
    ];
    public $js = [
        'admin/js/apps.js',
        'admin/js/demo.js',
    ];
    public $depends = [
        'app\assets\admin\CoreAsset',
        'app\assets\admin\component\PageLevelFontAwesomeAsset',
    ];

}
