<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class MailController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionInbox(){
        return $this->render('inbox');
    }
    
    public function actionCompose(){
        return $this->render('compose');
    }
    
    public function actionView(){
        return $this->render('view');
    }
    
}
