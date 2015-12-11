<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\Session;
use app\models\Tb_Task;

class SiteController extends Controller
{
    public function init()
    {
        $session = new Session();
        
       if($session['usr'] == "")
        {
          $this->redirect('index.php?r=user/login');
        }
    }

    public function actionIndex()
    {
        $Tb_Task = new Tb_Task();
        $data = $Tb_Task->find()->all();
        return $this->render('index',['data'=>$data]);
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionOldconfig()
    {

    }
}
