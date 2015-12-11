<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Tb_Users;
use yii\web\Session;
class UserController extends Controller
{
    public function actionLogin()
    {
            $Tb_Users = new Tb_Users();
            $post = Yii::$app->request->post();
             $session = new Session();
           
            if(!empty($post)){
            $user = Tb_Users::find()->where([
              'usr' => $post['Tb_Users']['usr'],
              'pwd' => $post['Tb_Users']['pwd']
                ])
            ->one();
            if(!empty($user)){
            $session['usr'] = $user->usr;
            $session['active_menu'] = ""
            return $this->redirect('index.php?r=site/index');   
            }else{
             $session->setFlash('message','Username หรือ Password ไม่ถูกต้อง');
            }
            }
            $login_read = new Tb_Users();
            return $this->render('//site/login',['login'=>$login_read]);
        }

    public function actionLogout()
    {
            $session = new Session();
            $session['usr'] = "";
            $this->redirect('index.php');        
    }
}