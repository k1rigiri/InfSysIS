<?php

namespace app\models;

use yii\base\Model;

class Lab2Form extends Model
{
    public $searchbook;

    public function rules()
    {
        return [
            [['searchbook'], 'required'],
        ];
    }
}
?>