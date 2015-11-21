<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.15
 * Time: 0:44
 */
namespace frontend\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $surname;
    public $phoneNumber;
    public $email;
    public $status;
    public $sex;
    public $additionalServises;
    public $file;
    public $verifyCode;
    public $textArea;

    public function rules()
    {
        return [
            [['name', 'email', 'status', 'sex', 'additionalServises', 'phoneNumber', 'textArea'], 'required'],
            ['email', 'email'],
            [['file'], 'file']
        ];
    }
}