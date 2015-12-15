<?php

namespace frontend\models;

use Yii;
/**
 * This is the model class for table "clients".
 *
 * @property integer $id
 * @property string $family_name
 * @property string $first_name
 * @property string $birth_date
 */
class ClientsForm extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['family_name', 'first_name', 'birth_date'], 'required'],
            [['birth_date'], 'safe'],
            [['family_name', 'first_name'], 'string', 'max' => 255]
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
            'birth_date' => 'Birth Date',
        ];
    }

    public function getContractsForm()
    {
        return $this->hasMany(ContractsForm::className(), ['client_id' => 'id']);
    }
}
