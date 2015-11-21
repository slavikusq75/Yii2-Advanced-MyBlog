<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TechSupportApp".
 *
 * @property integer $idClient
 * @property string $userame
 * @property string $email
 */
class TechSupportApp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TechSupportApp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userame', 'email'], 'required'],
            [['userame', 'email'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idClient' => 'Id Client',
            'userame' => 'Userame',
            'email' => 'Email',
        ];
    }
}
