<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "techsupport".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $phone_number
 * @property string $email
 * @property string $status
 * @property string $sex
 * @property string $additional_services
 * @property string $file
 * @property string $text_area
 * @property integer $age
 * @property string $estimation
 * @property string $website
 */
class TechsupportForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'techsupport';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'phone_number', 'email', 'status', 'sex', 'additional_services', 'file', 'text_area', 'age', 'estimation', 'website'], 'required'],
            [['text_area'], 'string'],
            [['age'], 'integer'],
            [['name', 'surname', 'phone_number', 'email', 'status', 'sex', 'additional_services', 'file', 'estimation', 'website'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'status' => 'Status',
            'sex' => 'Sex',
            'additional_services' => 'Additional Services',
            'file' => 'File',
            'text_area' => 'Text Area',
            'age' => 'Age',
            'estimation' => 'Estimation',
            'website' => 'Website',
        ];
    }
}
