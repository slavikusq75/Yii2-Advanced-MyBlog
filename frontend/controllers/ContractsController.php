<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.11.15
 * Time: 23:35
 */
namespace frontend\controllers;

//use app\models\Techsupport;
use frontend\components\NewComponent;
use frontend\models\ContractsForm;
use frontend\models\EntryForm;
use Yii;
use frontend\models\RegForm;
use frontend\models\LoginForm;
use frontend\models\Client;
use frontend\components;
use frontend\models\TechsupportForm;
//use yii\validators;

class MainController extends \yii\web\Controller
{
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
}