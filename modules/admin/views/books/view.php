<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Books $model */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_book' => $model->id_book], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_book' => $model->id_book], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_book',
            'Name',
            'Description:ntext',
            'year_of_creating',
            'id_author',
            'id_genre',
        ],
    ]) ?>

</div>
