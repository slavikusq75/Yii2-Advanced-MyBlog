<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "contracts".
 *
 * @property integer $id
 * @property integer $contract_number
 * @property string $contract_date
 * @property integer $client_id
 */
class ContractsForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['contract_number', 'client_id'], 'integer'],
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
            'client_id' => 'Client ID',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientsForm()
    {
        return $this->hasOne(ClientsForm::className(), ['id' => 'client_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */

    /**
     * @return \yii\db\ActiveQuery
     */
    /*public function getChecks()
    {
        return $this->hasMany(Checks::className(), ['client_id' => 'id']);
    }*/
}

