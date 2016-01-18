<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_092938_create_profile_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('profile', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'first_name' => $this->text()->notNull(),
            'last_name' => $this->text()->notNull(),
            'birthdate' => $this->date()->notNull(),
            'gender_id' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('FK_profile_gender', 'profile', 'gender_id', 'gender', 'id');
    }

    public function down()
    {
        $this->dropTable('profile');
    }
}
