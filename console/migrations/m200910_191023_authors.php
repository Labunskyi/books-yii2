<?php

use yii\db\Migration;

/**
 * Class m200910_191023_authors
 */
class m200910_191023_authors extends Migration
{
	/**
     * {@inheritdoc}
     */
    public function up()
    {
		$this->createTable('authors', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'surname' => $this->string()->notNull(),
			'birthday' => $this->date("Y-m-d"),
			'phone' => $this->string(),
        ]);
    }
	
	/**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('authors');
    }
}
