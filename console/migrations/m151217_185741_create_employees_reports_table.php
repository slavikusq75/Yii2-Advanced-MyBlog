<?php

use yii\db\Schema;
use yii\db\Migration;

class m151217_185741_create_employees_reports_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('employees_reports', [
            'id' => $this->primaryKey(),
            'employee_id' => $this->integer()->notNull(),
            'report_id' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('employees_reports');
    }
}
