<?php

namespace frontend\controllers;

use frontend\components\NewComponent;
use Yii;
use frontend\models\RegForm;
use frontend\models\LoginForm;
use frontend\models\Client;
use frontend\components;


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
        $NewComponent = new NewComponent();
        echo $NewComponent->property;

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