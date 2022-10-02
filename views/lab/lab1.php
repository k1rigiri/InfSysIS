<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

$this->title = 'Лаб.1';
?>
<div class="container-md text-left">Лабораторная работа №1</div>

<div class="lab1-content">
        <div class="row">
            <div class="col-lg-6">
                <?php $form =  ActiveForm::begin(); ?>
                    <h1 class="display-6">Отзыв о ресторане</h1>
                    <?= $form->field($model, 'name')-> label('Ваше имя:') ?>
                    <?= $form->field($model, 'email')-> label('Ваш e-mail:') ?>
                    <?= $form->field($model, 'age')->textInput()->hint('Возраст может быть от 18 до 100')->label('Ваш возраст:') ?>
                    <?= $form->field($model, 'dateofvisit')-> label('Дата посещения:')->widget(DatePicker::class, [
                    //'language' => 'ru',
                    'dateFormat' => 'dd-MM-yyyy',
                    'options' => ['placeholder' => 'дд-мм-гг',]
                    ]) ?>
                    <?= $form->field($model, 'cuisine')->label('Любимая кухня:')->dropDownList([
                        '0' => 'Русская',
                        '1' => 'Китайская',
                        '2' => 'Японская',
                        '3' => 'Итальянская'
                    ]) ?>
                    <?= $form-> field ($model, 'radio')->radioList (array('Да', 'Нет'))-> label('Порекомендуете нас друзьям?') ?>
                    <?= $form->field($model, 'body')-> textarea()-> label('Текст отзыва:') ?>
                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
            </div>

            <div class="col-lg-6">
                <h1 class="display-6">Переданный отзыв:</h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Ваше имя:</td>
                            <td><?= Html::encode($model->name) ?></td>
                        </tr>
                        <tr>
                            <td>Ваш e-mail:</td>
                            <td><?= Html::encode($model->email) ?></td>
                        </tr>
                        <tr>
                            <td>Дата посещения:</td>
                            <td><?= Html::encode($model->dateofvisit) ?></td>
                        </tr>
                        <tr>
                            <td>Ваш возраст:</td>
                            <td><?= Html::encode($model->age) ?></td>
                        </tr>
                        <tr>
                            <td>Любимая кухня:</td>
                            <td><?= Html::encode($model->cuisine) ?></td>
                        </tr>
                        <tr>
                            <td>Порекомендуете нас друзьям?</td>
                            <td><?= Html::encode($model->radio) ?></td>
                        </tr>     
                        <tr>
                            <td>Текст отзыва:</td>
                            <td><?= Html::encode($model->body) ?></td>
                    </tbody>
                </table>
            </div>
</div>