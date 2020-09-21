<?php

use yii\db\Migration;

/**
 * Class m200910_191041_genres
 */
class m200910_191041_genres extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
		$this->createTable('genres', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('genres');
    }
}
