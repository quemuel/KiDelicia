<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class TableController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionDefault(){
        return $this->render('default');
    }
    
    public function actionColor(){
        return $this->render('color');
    }
    
    public function actionDatatable(){
        return $this->render('data-table');
    }
    
   
    
}
