<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

$this->title = 'Лаб.2';
?>

<div class="container-md text-left">Лабораторная работа №2</div>

<div class="lab1-content">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="display-6">Таблица авторы:</h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>id автора</td>
                            <td><b>ФИО</td>
                            <td><b>День рождения</td>
                            <td><b>Дата смерти</td>
                        </tr>
                        <?php foreach ($author as $authors): ?>
                            <tr>
                                <td><?= Html::encode($authors->id_author) ?></td>
                                <td><?= Html::encode($authors->FIO) ?></td>
                                <td><?= Html::encode($authors->Birthday) ?></td>
                                <td><?= Html::encode($authors->Deathday) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-6">
                <h1 class="display-6">Таблица жанры:</h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>id жанра</td>
                            <td><b>Название</td>
                            <td><b>Описание</td>
                        </tr>
                        <?php foreach ($genres as $genre): ?>
                            <tr>
                                <td><?= Html::encode($genre->id_genre) ?></td>
                                <td><?= Html::encode($genre->Name) ?></td>
                                <td><?= Html::encode($genre->descr) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-lg-6">
                <h1 class="display-6">Таблица книги:</h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>id книги</td>
                            <td><b>Название</td>
                            <td><b>Описание</td>
                            <td><b>Год написания</td>
                            <td><b>Автор</td>
                            <td><b>Жанр</td>
                        </tr>
                        <?php foreach ($books_table as $books): ?>
                            <tr>
                                <td><?= Html::encode($books->id_book) ?></td>
                                <td><?= Html::encode($books->Name) ?></td>
                                <td><?= Html::encode($books->Description) ?></td>
                                <td><?= Html::encode($books->year_of_creating) ?></td>
                                <td><?= Html::encode($books->authors->FIO) ?></td>
                                <td><?= Html::encode($books->genre->Name) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-6">
                <h1 class="display-6">Запросы:</h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Запрос 1:</td>
                            <td><b>id книги</td>
                            <td><b>Название</td>
                            <td><b>Описание</td>
                            <td><b>Год написания</td>
                            <td><b>Автор</td>
                            <td><b>Жанр</td>
                        </tr>
                        <?php foreach ($query20thCentury as $books): ?>
                            <tr>
                                <td></td>
                                <td><?= Html::encode($books->id_book) ?></td>
                                <td><?= Html::encode($books->Name) ?></td>
                                <td><?= Html::encode($books->Description) ?></td>
                                <td><?= Html::encode($books->year_of_creating) ?></td>
                                <td><?= Html::encode($books->authors->FIO) ?></td>
                                <td><?= Html::encode($books->genre->Name) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td>Запрос 2:</td>
                            <td><b>Автор</td>
                            <td><b>Количество книг</td>
                        </tr>
                        <?php foreach ($queryCountBooks as $authors): ?>
                            <tr>
                                <td></td>
                                <td><?= Html::encode($authors->FIO) ?></td>
                                <td><?= Html::encode($authors->bookCount) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="lab1-content">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-6">Поиск книг</h1>
                    <?php $form =  ActiveForm::begin(); ?>
                    <?= $form->field($model, 'searchbook')-> label('Введите слово:') ?>
                    <div class="form-group">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

        <?= Html::a('Добавить автора', ['lab/addauthor']) ?>
        <?= Html::a('Удалить автора', ['lab/deleteauthor']) ?>
</div>