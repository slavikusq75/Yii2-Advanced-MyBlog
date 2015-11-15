<?php

namespace frontend\controllers;

use Yii;
use frontend\models\RegForm;
use frontend\models\LoginForm;
use frontend\models\Client;



class MainController extends \yii\web\Controller
{
/*    public function actionIndex()
    {
        $hello = 'Hello everybody!';

        return $this->render(
            'index',
            [
                'hello' => $hello
            ]);
    } */

    public function actionClient()
    {
        $model = new Client();

        return $this->render(
            'client',
            [
                'model' => $model
            ]
        );
    }

/*    public function actionReg()
    {
        $model = new RegForm();

        return $this->render(
            'reg',
            [
                'model' => $model
            ]
        );
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        return $this->render(
            'login',
            [
                'model' => $model
            ]
        );
    } */
}