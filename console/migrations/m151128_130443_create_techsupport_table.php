<?php

use yii\db\Schema;
use yii\db\Migration;

class m151128_130443_create_techsupport_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('techsupport', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'surname' => $this->string()->notNull(),
            'phone_number' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'status' => $this->string()->notNull(),
            'sex' => $this->string()->notNull(),
            'additional_services' => $this->string()->notNull(),
            'file' => $this->string()->notNull(),
            'text_area' => $this->text()->notNull(),
            'age' => $this->integer()->notNull(),
            'estimation' => $this->string()->notNull(),
            'website' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('techsupport');
    }
}
