<?php

use yii\db\Migration;

/**
 * Class m200910_190909_books
 */
class m200910_190909_books extends Migration
{
    
    public function up()
    {
		$this->createTable('books', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
			'author' => $this->string(),
			'img' => $this->string(),
			'date' => $this->date("Y-m-d"),
			'genre_id' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('books');
    }
}
