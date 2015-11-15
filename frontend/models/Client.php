<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 15.11.15
 * Time: 7:17
 */
namespace frontend\models;

use yii\base\Model;
use Yii;

class Client extends Model
{
    protected $name = 'John Doe';

    public function __construct()
    {
       echo 'I am a new client!';
    }
}