<?php

namespace app\modules\admin\controllers;

use yii\views\site\login;
use yii;
use app\models\LoginForm;
use yii\web\Controller;
use yii\filters\AccessControl;

class AppAdminController extends Controller {

    public function behaviors()
      {
          return [
              'access' => [
                  'class' => AccessControl::class,
                  'rules' => [
                      [
                          'allow' => true,
                          'roles' => ['@'],
                      ],
                  ],
              ],
          ];
      }
       public function actionLogin()
          {
              if (!Yii::$app->user->isGuest) {
                  return $this->goHome();
              }
  
              $model = new LoginForm();
              if ($model->load(Yii::$app->request->post()) && $model->login()) {
                  return $this->goBack();
              }
  
              $model->password = '';
              return $this->render('login', [
                  'model' => $model,
              ]);
       }
  }
  