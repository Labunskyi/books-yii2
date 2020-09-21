<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $author_id
 * @property string|null $img
 * @property string|null $date
 * @property string|null $genre_id
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
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['date', 'authors'], 'safe'],
            [['title', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'img' => 'Img',
            'date' => 'date',
			'authors' => 'Authors'
        ];
    }

    /**
     * {@inheritdoc}
     * @return BooksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BooksQuery(get_called_class());
    }
	
	public function getAuthorsBooks()
    {
        return $this->hasMany(authorsBooks::className(), ['book_id' => 'id']);
    }

    public function getAuthors()
    {
        return $this->hasMany(Authors::className(), ['id' => 'author_id'])
            ->via('authorsBooks');
    }
	
	public function getGenresBooks()
    {
        return $this->hasMany(genresBooks::className(), ['book_id' => 'id']);
    }

    public function getGenres()
    {
        return $this->hasMany(Genres::className(), ['id' => 'genre_id'])
            ->via('genresBooks');
    }
}
