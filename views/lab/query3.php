<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Лаб.2';
?>

<div class="container-md text-left">Лабораторная работа №2</div>
            <h1 class="display-6">Найденные книги</h1>
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
                <?php foreach ($querysearchbook as $books): ?>
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