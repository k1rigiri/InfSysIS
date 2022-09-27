<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use app\models\Lab1Form;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionSay($message = 'Hello!')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionEntry()
    {
        $model = new EntryForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }

    public function actionTest()
    {
        return $this->render('Test');
    }

    public function actionInfo()
    {
        return $this->render('info');
    }

    public function actionLab1()
    {
        $model = new Lab1Form();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            return $this->render('lab1', ['model' => $model]);
        } else {
            return $this->render('lab1', ['model' => $model]);
        }
    }

    public function actionLab2()
    {
        return $this->render('lab2');
    }
    public function actionLab3()
    {
        return $this->render('lab3');
    }

}
