<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class BlankonController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionVersions(){
        return $this->render('versions');
    }
    
    
}
