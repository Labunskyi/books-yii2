<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "genres_books".
 *
 * @property int|null $genre_id
 * @property int|null $book_id
 */
class GenresBooks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genres_books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre_id', 'book_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'genre_id' => 'Genre ID',
            'book_id' => 'Book ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return GenresBooksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GenresBooksQuery(get_called_class());
    }
	
	public function getGenres()
    {
        return $this->hasMany(Genres::className(), ['id' => 'genre_id']);
    }
	
	public function getBooks()
    {
        return $this->hasMany(Books::className(), ['id' => 'book_id']);
    }
}
