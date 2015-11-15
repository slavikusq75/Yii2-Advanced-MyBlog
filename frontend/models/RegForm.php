<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 14.11.15
 * Time: 22:38
 */
namespace frontend\models;

use yii\base\Model;
use Yii;

class RegForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [
                ['username', 'email', 'password'],
                'required'
            ]

        ];
    }
}