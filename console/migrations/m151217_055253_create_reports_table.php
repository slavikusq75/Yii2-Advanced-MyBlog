<?php

use yii\db\Schema;
use yii\db\Migration;

class m151217_055253_create_reports_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('reports', [
            'id' => $this->primaryKey(),
            'report_name' => $this->string()->notNull(),
            'report_number' => $this->integer(4)->notNull(),
            'report_date' => $this->date()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('reports');
    }
}
