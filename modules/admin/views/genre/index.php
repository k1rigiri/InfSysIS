<?php

use app\modules\admin\models\Genre;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\GenreSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Жанры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить жанр', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_genre',
            'Name',
            'descr:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Genre $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_genre' => $model->id_genre]);
                 }
            ],
        ],
    ]); ?>


</div>

<a href="?r=admin" class="btn backbutton">Вернуться назад</a>
