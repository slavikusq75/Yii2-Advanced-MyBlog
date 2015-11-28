<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mortgages".
 *
 * @property integer $id
 * @property string $subject_type
 * @property double $weight
 * @property integer $assessed_value
 * @property integer $fineness
 */
class MortgagesForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mortgages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_type', 'weight', 'assessed_value', 'fineness'], 'required'],
            [['weight'], 'number'],
            [['assessed_value', 'fineness'], 'integer'],
            [['subject_type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject_type' => 'Subject Type',
            'weight' => 'Weight',
            'assessed_value' => 'Assessed Value',
            'fineness' => 'Fineness',
        ];
    }
}
