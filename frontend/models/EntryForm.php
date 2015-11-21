<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.15
 * Time: 0:44
 */
namespace frontend\models;

use yii\base\Model;
use yii\validators;

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
    public $age;

    public function rules()
    {
        return [
            [['textArea'], 'required'],
            ['name', 'required', 'message' => 'Please type a name'],
            ['surname', 'required', 'message' => 'Please type a surname'],
            ['age', 'compare', 'compareValue' => 18, 'operator' => '>=', 'message' => 'Sorry, You are under 18, permission denied'],
            ['email', 'required', 'message' => 'Please type an email'],
            ['email', 'email'],
            [['file'], 'file']
        ];
    }
}