<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "checks".
 *
 * @property integer $id
 * @property integer $check_number
 * @property integer $check_summ
 * @property string $check_date
 */
class ChecksForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'checks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['check_number', 'check_summ', 'check_date'], 'required'],
            [['check_number', 'check_summ'], 'integer'],
            [['check_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'check_number' => 'Check Number',
            'check_summ' => 'Check Summ',
            'check_date' => 'Check Date',
        ];
    }
}
