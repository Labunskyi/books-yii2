<?php

use yii\db\Migration;

/**
 * Class m200913_211621_create_genres_books
 */
class m200913_211621_create_genres_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('genres_books', [
            'genre_id' => $this->smallInteger(),
            'book_id' => $this->smallInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('genres_books');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200913_211621_create_genres_books cannot be reverted.\n";

        return false;
    }
    */
}
