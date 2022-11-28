<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\Lab1Form;
use app\models\Lab2Form;
use app\models\Addauthor_form;
use app\models\authors;
use app\models\genre;
use app\models\books;


class LabController extends Controller
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


    Public function actionLab2()
    {
        //query data from tables
        $author = authors::find()->all();
        $genres = genre::find()->all();
        $books_table = books::find()->joinWith('authors', 'genre')->all();

        //Task 3. Queries
        $query20thCentury = books::find()->joinWith('authors', 'genre')
                            ->where(['between', 'year_of_creating', "1901-01-01", "2000-12-31" ])
                            ->orderBy(['year_of_creating' => SORT_ASC])
                            ->all();

        $queryCountBooks = authors::find()
                            ->select(["FIO, COUNT(id_book) AS bookCount"])
                            ->joinWith('books')
                            ->groupBy('FIO')
                            ->orderBy(['bookCount' => SORT_DESC])
                            ->all();

        $model = new Lab2Form();
        

        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $querysearchbook = books::find()
                            ->joinWith('authors', 'genre')
                            ->where(['Like', 'Name', $model->searchbook])
                            ->all();

            return $this->render('query3', ['model' => $model, 'querysearchbook' => $querysearchbook,] );
        }
        else {
            return $this->render('lab2', ['author' => $author, 
                                    'genres' => $genres, 
                                    'books_table' => $books_table, 
                                    'query20thCentury' => $query20thCentury, 
                                    'queryCountBooks' => $queryCountBooks,
                                    'model' => $model] );
        }
        
    }
    public function actionAddauthor()
    {
        $add = new Addauthor_form();

        if ($add->load(Yii::$app->request->post()) && $add->validate()){
            // print_r($add->addfio);}
            $authors = new authors();
            $authors->FIO = $add->addfio;
            $authors->Birthday = $add->addbirthday;
            $authors->Deathday = $add->adddeathday;
            $authors->save();
            Yii::$app->session->setFlash('success', "Автор Добавлен");
            return $this->render('addauthor', ['add' => $add]);}
        else
        {
            return $this->render('addauthor', ['add' => $add]);
        }
    }
    public function actionDeleteauthor()
    {
        $add = new Addauthor_form();
        
        if ($add->load(Yii::$app->request->post()) && $add->validate()){
            $authors = authors::findOne($add->idauthor);
            // $authors = authors::find()->where(['id_author' => $add->idauthor])->one();
            if(isset ($authors))
            {
                $authors->delete();
                Yii::$app->session->setFlash('success', "Автор удален");
                return $this->render('deleteauthor', ['add' => $add]);
            }
            Yii::$app->session->setFlash('error', "Такого автора нет");
            return $this->render('deleteauthor', ['add' => $add]);
        }
        else
        {
            return $this->render('deleteauthor', ['add' => $add]);
        }
    }
    
}