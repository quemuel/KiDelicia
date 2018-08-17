<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class PageController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }

    public function actionGallery(){
        return $this->render('gallery');
    }

    public function actionFaq(){
        return $this->render('faq');
    }
    
    public function actionCalendar(){
        return $this->render('calendar');
    }
    
    public function actionInvoice(){
        return $this->render('invoice');
    }
    
    public function actionMessages(){
        return $this->render('messages');
    }
    
    public function actionTimeline(){
        return $this->render('timeline');
    }
    
    public function actionProfile(){
        return $this->render('profile');
    }
    
    public function actionSearchcourse(){
        return $this->render('search-course');
    }
    
    public function actionError403(){
        $this->layout = 'lay-error';
        return $this->render('error-403');
    }
    
    public function actionError404(){
        $this->layout = 'lay-error';
        return $this->render('error-404');
    }
    
    public function actionError500(){
        $this->layout = 'lay-error';
        return $this->render('error-500');
    }
    
    
    public function actionSignin(){
        $this->layout = 'lay-account';
        return $this->render('signin');
    }

    public function actionSignintype2(){
        $this->layout = 'lay-account';
        return $this->render('signintype2');
    }
    
    public function actionSignup(){
        $this->layout = 'lay-account';
        return $this->render('signup');
    }
    
    public function actionLockscreen(){
        $this->layout = 'lay-account';
        return $this->render('lock-screen');
    }
    
    public function actionLostpassword(){
        $this->layout = 'lay-account';
        return $this->render('lost-password');
    }
    
    
}
