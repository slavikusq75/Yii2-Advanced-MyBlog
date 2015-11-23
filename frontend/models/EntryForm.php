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
    public $additionalServices;
    public $file;
    public $verifyCode;
    public $textArea;
    public $age;
    public $estimation;
    public $website;

    public function rules()
    {
        return [
            [['textArea', 'age'], 'required'],
            ['name', 'required', 'message' => 'Please type a name'],
            ['name', 'string', 'length' => [2, 25]],
            ['surname', 'required', 'message' => 'Please type a surname'],
            ['surname', 'match', 'pattern' => '/^[a-z]\w*$/i'],

            ['age',  'compare', 'compareValue' => 18, 'operator' => '>=',
                'message' => 'Sorry, You are under 18, permission denied'
            ],
            ['age', 'integer'],
            ['email', 'required', 'message' => 'Please type an email'],
            ['email', 'email', 'message' => 'Email is not correct!'],
            ['additionalServices', 'default', 'value' => 'Nothing'],
            ['estimation', 'integer'],
            ['estimation', 'in', 'range' => [1,2,3]],
            ['website', 'url', 'defaultScheme' => 'http'],

            [['file'], 'file', 'extensions' => 'png, jpg'],
            //['file', 'image', 'extensions' => 'png, jpg']
        ];
    }
}