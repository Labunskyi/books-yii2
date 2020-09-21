<?php

use yii\db\Migration;

/**
 * Class m200910_191114_users
 */
class m200910_191114_users extends Migration
{   
	/**
     * {@inheritdoc}
     */
    public function up()
    {
		$this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'password_hash' => $this->string(),
			'password_reset_token' => $this->string(),
			'verification_token' => $this->string(),
			'email' => $this->string(),
			'auth_key' => $this->string(),
			'status' => $this->integer(),
			'created_at' => $this->dateTime(),
			'updated_at' => $this->dateTime(),
			'password' => $this->string(),
        ]);
    }
	
	/**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
