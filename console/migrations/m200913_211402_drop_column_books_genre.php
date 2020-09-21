<?php

use yii\db\Migration;

/**
 * Class m200913_211402_drop_column_books_genre
 */
class m200913_211402_drop_column_books_genre extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropColumn('books', 'genre_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createColumn('books', 'genre_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200913_211402_drop_column_books_genre cannot be reverted.\n";

        return false;
    }
    */
}
