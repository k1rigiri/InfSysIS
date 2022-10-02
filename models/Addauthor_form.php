<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class addauthor_form extends ActiveRecord
{
    public $idauthor;
    public $addfio;
    public $addbirthday;
    public $adddeathday;

    public function rules()
    {
        return [
            [['idauthor','addfio', 'addbirthday', 'adddeathday'], 'safe']
        ];
    }
}
?>