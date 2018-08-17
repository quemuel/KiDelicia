<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class FrontendController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        echo 'empty';
        //return $this->render('index');
    }
    
    public function actionThemes()
    {
        return $this->render('themes');
    }
}
