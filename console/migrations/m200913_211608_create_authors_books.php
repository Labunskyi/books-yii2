<?php

use yii\db\Migration;

/**
 * Class m200913_211608_create_authors_books
 */
class m200913_211608_create_authors_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('authors_books', [
            'author_id' => $this->smallInteger(),
            'book_id' => $this->smallInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('authors_books');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200913_211608_create_authors_books cannot be reverted.\n";

        return false;
    }
    */
}
