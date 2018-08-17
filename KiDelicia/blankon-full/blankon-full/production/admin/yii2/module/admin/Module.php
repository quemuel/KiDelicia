<?php

namespace app\module\admin;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\module\admin\controllers';

    
    public function init()
    {
        parent::init();
        
        //$this->defaultRoute = 'dashboard';
        // custom initialization code goes here
    }
}
