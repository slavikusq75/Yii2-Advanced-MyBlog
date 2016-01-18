<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_090857_create_user_type_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('user_type', [
            'id' => $this->primaryKey(),
            'user_type_name' => $this->string(45)->notNull(),
            'user_type_value' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('user_type');
    }
}