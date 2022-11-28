<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property int $id_author
 * @property string|null $FIO
 * @property string|null $Birthday
 * @property string|null $Deathday
 *
 * @property Books[] $books
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db1');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Birthday', 'Deathday'], 'safe'],
            [['FIO'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_author' => 'Id автора',
            'FIO' => 'ФИО',
            'Birthday' => 'Дата рождения',
            'Deathday' => 'Дата смерти',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::class, ['id_author' => 'id_author']);
    }
}
