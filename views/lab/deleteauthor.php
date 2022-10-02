<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Лаб.2';
?>

<div class="container-md text-left">Лабораторная работа №2</div>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($add, 'idauthor')-> label('Id автора:') ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
