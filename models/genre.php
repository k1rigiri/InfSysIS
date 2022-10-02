<?php

namespace app\models;

use yii;
use yii\db\ActiveRecord;

class genre extends ActiveRecord{
    public static function getDb(){
        return Yii::$app->db1;
     } 

     public function getBooks()
     {
        return $this->hasOne(books::class, ['id_genre'=> 'id_genre']);
     }
}