<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

$this->title = 'Лаб.2';
?>  

<div class="container-md text-left">Лабораторная работа №2</div>

<?php $form = ActiveForm::begin(); ?>
        <?= $form->field($add, 'addfio')-> label('ФИО автора:')->textInput(['placeholder' => "И.О.Фамилия"]) ?>
        <?= $form->field($add, 'addbirthday')-> label('Дата рождения:')->widget(DatePicker::class, [
                    //'language' => 'ru',
                    'dateFormat' => 'yyyy-MM-dd',
                    'options' => ['placeholder' => 'гггг-мм-дд',]
                    ]) ?>
         <?= $form->field($add, 'adddeathday')-> label('Дата смерти:')->widget(DatePicker::class, [
                    //'language' => 'ru',
                    'dateFormat' => 'yyyy-MM-dd',
                    'options' => ['placeholder' => 'гггг-мм-дд',]
                    ]) ?>
        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
         </div>
    <?php ActiveForm::end(); ?>