<?php

namespace frontend\controllers;

//use app\models\Techsupport;
use frontend\components\NewComponent;
use frontend\models\EntryForm;
use Yii;
use frontend\models\RegForm;
use frontend\models\LoginForm;
use frontend\models\Client;
use frontend\components;
use frontend\models\Techsupport;
//use yii\validators;

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

    /*public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            return $this->render('entry-confirm', ['model' => $model]);

        } else {

            return $this->render('entry', ['model' => $model]);
        }
    }*/

    public function actionTechsupport()
    {
        $model = new Techsupport();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            return $this->render('techsupport-confirm', ['model' => $model]);

        } else {

            return $this->render('techsupport', ['model' => $model]);
        }
    }

    /*public function actionClient()
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
    }*/

    /*public function actionTechSupportApp()
    {
        $model = new TechSupportApp();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('techsupportapp', ['model' => $model]);

        } else {
            return $this->render('techsupportapp', ['model' => $model]);
        }
    }*/

    /*public function actionLogin()
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