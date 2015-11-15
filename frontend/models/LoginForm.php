<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 14.11.15
 * Time: 22:37
 */
namespace frontend\models;

use yii\base\Model;
use Yii;

class LoginForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            [
                ['username', 'password'],
                'required'
            ]

        ];
    }
}