<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1>Вход в административную панель</h1>

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

            <?= $form->field($model, 'username')-> label('Логин') ->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')-> label('Пароль')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')-> label('Запомнить')->checkbox([
                'template' => "<div class=\" custom-control custom-checkbox\">{input} {label}</div>\n<div class=\>{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="">
                    <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
