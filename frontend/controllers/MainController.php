<?php

namespace frontend\controllers;

//use app\models\Techsupport;
use frontend\components\NewComponent;
use frontend\models\ContractsForm;
use frontend\models\ChecksForm;
use frontend\models\EntryForm;
use frontend\models\MortgagesForm;
use Yii;
use frontend\models\RegForm;
use frontend\models\LoginForm;
use frontend\models\Client;
use frontend\components;
use frontend\models\TechsupportForm;
use frontend\models\ClientsForm;
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
        $model = new TechsupportForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->save();
            return $this->render('techsupport-confirm', ['model' => $model]);

        } else {

            return $this->render('techsupport', ['model' => $model]);
        }
    }

    public function actionContracts()
    {
        $model = new ContractsForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->save();
            return $this->render('contracts-confirm', ['model' => $model]);

        } else {

            return $this->render('contracts', ['model' => $model]);
        }
    }

    public function actionChecks()
    {
        $model = new ChecksForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->save();
            return $this->render('checks-confirm', ['model' => $model]);

        } else {

            return $this->render('checks', ['model' => $model]);
        }
    }

    public function actionMortgages()
    {
        $model = new MortgagesForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->save();
            return $this->render('mortgages-confirm', ['model' => $model]);

        } else {

            return $this->render('mortgages', ['model' => $model]);
        }
    }

    public function actionClients()
    {
        $model = new ClientsForm();
        //$queries = $model->find()->All();
        //var_dump($query); exit;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->save();
            return $this->render('clients-confirm', ['model' => $model]);

        } else {

            return $this->render('clients', ['model' => $model]);
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