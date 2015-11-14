<?php

namespace frontend\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $hello = 'Hello everybody!';

        return $this->render(
            'index',
            [
                'hello' => $hello
            ]);
    }

}
