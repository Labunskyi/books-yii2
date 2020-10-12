<?php

namespace frontend\modules\admin\models\forms;

use Yii;
use yii\base\Model;
use common\models\Books;
use common\models\AuthorsBooks;
use common\models\GenresBooks;
use yii\web\UploadedFile;

/**
 * BooksForm is the model behind the books form.
 */
class BooksForm extends Model
{
	public $id;
	public $title;
    public $content;
    public $authors;
	public $genres;
    public $img;
    public $date;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
			[['title'], 'required'],
            [['content'], 'required'],
			[['authors', 'genres'], 'required'],
            [['date'], 'required'],
            [['title'], 'string', 'max' => 255],
			[['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }
	
	/**
     * {@inheritdoc}
     */
	public function upload()
    {	
        if ($this->validate()) {
			$books = new Books();
			$books->title = $this->title;
			$books->content = $this->title;
			$books->date = $this->date;
			if (isset($this->img->name)) {
				$books->img = $this->img->name;	
			}	
			$books->save();
			$this->id = $books->id;

			foreach($this->authors as $value) {
				$authors_books = new AuthorsBooks();
				$authors_books->book_id = $books->id;
				$authors_books->author_id = $value;
				$authors_books->save();
			}
			
			foreach($this->genres as $value) {
				$genres_books = new GenresBooks();
				$genres_books->book_id = $books->id;
				$genres_books->genre_id = $value;
				$genres_books->save();
			}
			
			if (isset($this->img->name)) {
				$this->img->saveAs('images/' . $this->img->baseName . '.' . $this->img->extension);
			}
			return true;
        } else {
            return false;
        }
    }

}
