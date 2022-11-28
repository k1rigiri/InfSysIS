<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-registration">
    <h1>Регистрация на сайте</h1>

    <div class="col-lg-3">
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'col-form-label mr-lg-3'],
                'inputOptions' => ['class' => 'form-control'],
                'errorOptions' => ['class' => 'invalid-feedback'],
            ],
        ]); ?>

            <?= $form->field($model, 'username')->label('Ваше имя') ?>
            <?= $form->field($model, 'password')->label('Ваш пароль') ?>

            <div class="form-group">
                <div class="">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'registration-button']) ?>
                </div>
            </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>