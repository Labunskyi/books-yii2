<?php

use yii\db\Migration;

/**
 * Class m200913_211143_drop_column_books
 */
class m200913_211143_drop_column_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropColumn('books', 'author_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createColumn('books', 'author_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200913_211143_drop_column_books cannot be reverted.\n";

        return false;
    }
    */
}
