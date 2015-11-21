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
    public $email;
    public $status;

    public function rules()
    {
        return [
            [['name', 'email', 'status'], 'required'],
            ['email', 'email'],
        ];
    }
}