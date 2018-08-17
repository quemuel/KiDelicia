<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class ChartController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionFlot(){
        return $this->render('flot');
    }
    
    public function actionMorris(){
        return $this->render('morris');
    }
    
    public function actionChartjs(){
        return $this->render('chartjs');
    }
    
    public function actionC3js(){
        return $this->render('c3js');
    }
    
    
   
    
}
