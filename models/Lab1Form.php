<?php

namespace app\models;

use yii\base\Model;

class Lab1Form extends Model
{
    public $name;
    public $email;
    public $age;
    public $dateofvisit;
    public $body;
    public $radio;
    public $cuisine;

    public function rules()
    {
        return [
            [['name', 'email', 'age', 'dateofvisit', 'body', 'cuisine', 'radio'], 'required'],
            ['email', 'email', 'message'=> 'Некорректный формат почты'],
            ['name', 'string', 'min' => 5, 'max' => 30,'tooShort' => 'Имя меньше {min} символов', 'tooLong' => 'Имя больше {max} символов'],
            ['name','match', 'pattern' => '/^[A-Za-zА-Яа-яё_\s,]+$/u', 'message'=> 'В имени могут быть только буквы'],
            ['age', 'integer','message' => 'Должно быть числом', 'min' => 18, 'tooSmall' => 'Возраст меньше {min}', 'max' => 100, 'tooBig' => 'Возраст больше {max}'],
            ['body', 'match', 'not' => true,'pattern' => '/( ){2,}/', 'message'=> 'В тексте присутствуют лишние пробелы']
        ];
    }
}
?>