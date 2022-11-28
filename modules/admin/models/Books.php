<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id_book
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $year_of_creating
 * @property int|null $id_author
 * @property int|null $id_genre
 *
 * @property Authors $author
 * @property Genre $genre
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
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
            [['Description'], 'string'],
            [['year_of_creating'], 'safe'],
            [['id_author', 'id_genre'], 'integer'],
            [['Name'], 'string', 'max' => 20],
            [['id_author'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::class, 'targetAttribute' => ['id_author' => 'id_author']],
            [['id_genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::class, 'targetAttribute' => ['id_genre' => 'id_genre']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_book' => 'Id книги',
            'Name' => 'Название',
            'Description' => 'Описание',
            'year_of_creating' => 'Дата создания',
            'id_author' => 'Автор',
            'id_genre' => 'Жанр',
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Authors::class, ['id_author' => 'id_author']);
    }

    /**
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::class, ['id_genre' => 'id_genre']);
    }
}
