<?php

namespace app\models;

use yii;
use yii\db\ActiveRecord;

class Country extends ActiveRecord{
    public static function getDb(){
        return Yii::$app->db;
     } 
}
