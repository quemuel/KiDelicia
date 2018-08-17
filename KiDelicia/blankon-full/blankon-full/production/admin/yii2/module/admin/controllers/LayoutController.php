<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class LayoutController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionBlank(){
        return $this->render('blank');
    }
    
    public function actionBoxed(){
        $this->layout = 'lay-admin-boxed';
        return $this->render('boxed');
    }
    
    public function actionHeaderfixed(){
        $this->layout = 'lay-admin-header-fixed';
        return $this->render('header-fixed');
    }
    
    public function actionSidebarfixed(){
        $this->layout = 'lay-admin-sidebar-fixed';
        return $this->render('sidebar-fixed');
    }
    
    public function actionSidebarminimize(){
        $this->layout = 'lay-admin-sidebar-minimize';
        return $this->render('sidebar-minimize');
    }
    
    public function actionSidebardefault(){
        return $this->render('sidebar-default');
    }
    
    public function actionSidebarboxed(){
        $this->layout = 'lay-admin-sidebar-boxed';
        return $this->render('sidebar-boxed');
    }
    
    public function actionSidebarrounded(){
        $this->layout = 'lay-admin-sidebar-rounded';
        return $this->render('sidebar-rounded');
    }
    
    public function actionSidebarcircle(){
        return $this->render('sidebar-circle');
    }
    
    public function actionFooterfixed(){
        $this->layout = 'lay-admin-footer-fixed';
        return $this->render('footer-fixed');
    }
    
    
   
    
}
