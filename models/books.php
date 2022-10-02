<?php

namespace app\models;

use yii;
use yii\db\ActiveRecord;


class books extends ActiveRecord{
    public static function getDb(){
        return Yii::$app->db1;
     } 

     public function getAuthors()
     {
        return $this->hasOne(Authors::class, ['id_author'=> 'id_author']);
     }

     public function getGenre()
     {
        return $this->hasOne(genre::class, ['id_genre'=> 'id_genre']);
     }
}