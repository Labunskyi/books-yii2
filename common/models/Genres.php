<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "genres".
 *
 * @property int $id
 * @property string $name
 */
class Genres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * {@inheritdoc}
     * @return GenresQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GenresQuery(get_called_class());
    }
	
	public function getGenresBooks()
    {
        return $this->hasMany(GenresBooks::className(), ['genre_id' => 'id']);
    }
}
