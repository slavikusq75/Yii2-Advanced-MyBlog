<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $family_name
 * @property string $first_name
 * @property string $login
 * @property string $password
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['family_name', 'first_name', 'login', 'password'], 'required'],
            [['family_name', 'first_name', 'login', 'password'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'family_name' => 'Family Name',
            'first_name' => 'First Name',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    public function getEmployees()
    {
        return $this->hasMany(Employees::className(), ['id' => 'employee_id'])
            ->viaTable('employees_reports', ['report_id' => '']);
    }
}
