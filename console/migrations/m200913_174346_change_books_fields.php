<?php

use yii\db\Migration;

/**
 * Class m200913_174346_change_books_fields
 */
class m200913_174346_change_books_fields extends Migration
{
    /**
     * {@inheritdoc}
     */
    // public function safeUp()
    // {

    // }

    /**
     * {@inheritdoc}
     */
    // public function safeDown()
    // {
        // echo "m200913_174346_change_books_fields cannot be reverted.\n";

        // return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
		$this->alterColumn('books', 'genre_id', $this->smallInteger());
    }

    public function down()
    {
        $this->alterColumn('books', 'genre_id', $this->string());
    }
    
}
