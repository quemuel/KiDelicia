<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class AnimateController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionAnimate(){
        return $this->render('animate');
    }
    
    
}
