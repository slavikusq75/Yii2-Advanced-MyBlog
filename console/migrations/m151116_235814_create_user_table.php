<?php

use yii\db\Schema;
use yii\db\Migration;

class m151116_235814_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'nickname' => Schema::TYPE_STRING . 'NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m151116_235814_create_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
