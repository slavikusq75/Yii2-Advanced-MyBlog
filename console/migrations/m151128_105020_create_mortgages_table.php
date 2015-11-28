<?php

use yii\db\Schema;
use yii\db\Migration;

class m151128_105020_create_mortgages_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('mortgages', [
            'id' => $this->primaryKey(),
            'subject_type' => $this->string()->notNull(),
            'weight' => $this->float(6)->notNull(),
            'assessed_value' => $this->integer(6)->notNull(),
            'fineness' => $this->integer(3)->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('mortgages');
    }
}
