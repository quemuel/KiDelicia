<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class ComponentController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionGridsystem(){
        return $this->render('grid-system');
    }
    
    public function actionButtons(){
        return $this->render('buttons');
    }
    
    public function actionTypography(){
        return $this->render('typography');
    }
    
    public function actionPanels(){
        return $this->render('panels');
    }
    
    public function actionAlerts(){
        return $this->render('alerts');
    }
    
    public function actionModals(){
        return $this->render('modals');
    }

    public function actionVideo(){
        return $this->render('video');
    }
    
    public function actionTabs(){
        return $this->render('tabs');
    }
    
    public function actionSliders(){
        return $this->render('sliders');
    }
    
    public function actionGlyphicons(){
        return $this->render('glyphicons');
    }
  
    public function actionGlyphiconspro(){
        return $this->render('glyphicons-pro');
    }
    
    public function actionFontawesome(){
        return $this->render('fontawesome');
    }
    
    public function actionWeathericons(){
        return $this->render('weathericons');
    }
    
    public function actionMapicons(){
        return $this->render('mapicons');
    }

    public function actionSimplelineicons(){
        return $this->render('simplelineicons');
    }
    
    public function actionOther(){
        return $this->render('other');
    }
    
}
