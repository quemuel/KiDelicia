<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class DashboardController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}
