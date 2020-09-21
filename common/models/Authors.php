<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string|null $birthday
 * @property string|null $phone
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
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname'], 'required'],
            [['birthday'], 'safe'],
            [['name', 'surname', 'phone'], 'string', 'max' => 255],
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
            'surname' => 'Surname',
            'birthday' => 'Birthday',
            'phone' => 'Phone',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AuthorsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AuthorsQuery(get_called_class());
    }
	
	public function getAuthorsBooks()
    {
        return $this->hasMany(AuthorsBooks::className(), ['author_id' => 'id']);
    }
}
