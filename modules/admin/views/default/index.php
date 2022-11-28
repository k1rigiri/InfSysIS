<?php

use yii\helpers\Html;
use yii\bootstrap5\Nav;

$this->title = ' Админка';
?>

<div class="admin-default-index">
<div class="container-md text-left">Административная панель</div>

<div>
    <ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="?r=admin%2Fauthors">Авторы</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?r=admin%2Fbooks">Книги</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?r=admin%2Fgenre">Жанры</a>
    </li>
</ul>
</div>