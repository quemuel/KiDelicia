<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class FormController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionElement(){
        return $this->render('element');
    }
    
    public function actionAdvanced(){
        return $this->render('advanced');
    }
    
    public function actionLayout(){
        return $this->render('layout');
    }
    
    public function actionValidation(){
        return $this->render('validation');
    }
    
    public function actionWizard(){
        return $this->render('wizard');
    }
    
    public function actionWysiwyg(){
        return $this->render('wysiwyg');
    }

    public function actionXeditable(){
        return $this->render('xeditable');
    }
    
}
