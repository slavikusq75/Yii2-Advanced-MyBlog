<?php

use yii\db\Schema;
use yii\db\Migration;

class m151128_125304_create_checks_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('checks', [
            'id' => $this->primaryKey(),
            'check_number' => $this->integer(6)->notNull(),
            'check_summ' => $this->integer()->notNull(),
            'check_date' => $this->date()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('checks');
    }
}
