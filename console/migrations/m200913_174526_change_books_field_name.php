<?php

use yii\db\Migration;

/**
 * Class m200913_174526_change_books_field_name
 */
class m200913_174526_change_books_field_name extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->renameColumn('books', 'author', 'author_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('books', 'author', 'author');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200913_174526_change_books_field_name cannot be reverted.\n";

        return false;
    }
    */
}
