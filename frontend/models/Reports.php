<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "reports".
 *
 * @property integer $id
 * @property string $report_name
 * @property integer $report_number
 * @property string $report_date
 */
class Reports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['report_name', 'report_number', 'report_date'], 'required'],
            [['report_number'], 'integer'],
            [['report_date'], 'safe'],
            [['report_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'report_name' => 'Report Name',
            'report_number' => 'Report Number',
            'report_date' => 'Report Date',
        ];
    }

    public function getReports()
    {
        return $this->hasOne(Reports::className(), ['id' => 'report_id']);
    }
}
