<?php

namespace app\models;

use yii;
use yii\db\ActiveRecord;

class authors extends ActiveRecord{

   public $bookCount;
   
    public static function getDb(){
        return Yii::$app->db1;
     } 
     
     public function getBooks()
     {
        return $this->hasMany(books::class, ['id_author'=> 'id_author']);
     }
}
