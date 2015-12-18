<?php

use yii\db\Schema;
use yii\db\Migration;

class m151218_210308_create_junction_employees_and_reports extends Migration
{
    public function up()
    {
        $this->createTable('employees_reports', [
            'employee_id' => $this->integer(),
            'report_id' => $this->integer(),
            'PRIMARY KEY(employee_id, report_id)'
        ]);
    }

    public function down()
    {
        echo "m151218_210308_create_junction_employees_and_reports cannot be reverted.\n";

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
