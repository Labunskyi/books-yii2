<?php

use yii\db\Migration;

/**
 * Class m200913_212006_drop_table_author_genre
 */
class m200913_212006_drop_table_author_genre extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->dropTable('author_genre');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('author_genre');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200913_212006_drop_table_author_genre cannot be reverted.\n";

        return false;
    }
    */
}
