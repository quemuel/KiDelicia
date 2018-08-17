<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    
    
    public $layout = 'lay_frontend';
    
    public $globalStyles = ['/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css'];
    
    public $pageLevelStyles = ['/global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
        '/global/plugins/bower_components/animate.css/animate.min.css'];
    
    public $themeStyles = ['/frontend/css/landing.css'];
    
    
    public $corePlugins = [ '/global/plugins/bower_components/jquery/dist/jquery.min.js',
                            '/global/plugins/bower_components/jquery-cookie/jquery.cookie.js',
                            '/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js',
                            '/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js',
                            '/global/plugins/bower_components/jpreloader/js/jpreloader.min.js',
                            '/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js',
                            '/global/plugins/bower_components/ionsound/js/ion.sound.min.js'
                        ];
    
    public $pageLevelPlugins = ['/global/plugins/bower_components/jquery-waypoints/waypoints.min.js',
        '/global/plugins/bower_components/jquery-waypoints/shortcuts/sticky-elements/waypoints-sticky.min.js'];
    
    public $pageLevelScripts = ['frontend/landing-page/js/blankon.landing.js'];
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

   

    public function actionIndex()
    {
        // redirect to admin page
        $this->redirect(['/admin/dashboard/index']);
    }

    
}
