<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class WidgetController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionOverview(){
        return $this->render('overview');
    }
    
    public function actionSocial(){
        return $this->render('social');
    }
    
    public function actionBlog(){
        return $this->render('blog');
    }
    
    public function actionWeather(){
        return $this->render('weather');
    }
    
    public function actionMisc(){
        return $this->render('misc');
    }
}
