<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "contracts".
 *
 * @property integer $id
 * @property integer $contract_number
 * @property string $contract_date
 */
class ContractsForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function getClients()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }


    public static function tableName()
    {
        return 'contracts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contract_number', 'contract_date'], 'required'],
            [['contract_number'], 'integer'],
            [['contract_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contract_number' => 'Contract Number',
            'contract_date' => 'Contract Date',
        ];
    }
}
