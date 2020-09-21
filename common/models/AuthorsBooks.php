<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "authors_books".
 *
 * @property int|null $author_id
 * @property int|null $book_id
 */
class AuthorsBooks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors_books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'book_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'author_id' => 'Author ID',
            'book_id' => 'Book ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AuthorsBooksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AuthorsBooksQuery(get_called_class());
    }
	
	public function getAuthors()
    {
        return $this->hasMany(Authors::className(), ['id' => 'author_id']);
    }
	
	public function getBooks()
    {
        return $this->hasMany(Books::className(), ['id' => 'book_id']);
    }
}
