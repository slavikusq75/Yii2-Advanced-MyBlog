<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_091613_create_gender_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('gender', [
            'id' => $this->primaryKey(),
            'gender_name' => $this->string(45)->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('gender');
    }
}