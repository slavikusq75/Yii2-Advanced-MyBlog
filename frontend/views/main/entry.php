<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.15
 * Time: 1:33
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\validators;
//use yii\bootstrap\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')."</br>" ?>

    <?= $form->field($model, 'surname')."</br>" ?>

    <?= $form->field($model, 'age')."</br>" ?>

    <?= $form->field($model, 'email')."</br>" ?>

    <?= $form->field($model, 'phoneNumber')."</br>" ?>

    <?= $form->field($model, 'sex')->radiolist(['Male', 'Female'])."</br>" ?>

    <?= $form->field($model,'status')->dropDownList([

        '0' => 'I am a new user',
        '1' => 'I use this service from 1 to 3 years',
        '2' => 'I use this service from 3 to 5 years',
        '3' => 'I use this service more then 5 years'


    ])."</br>";

    ?>

    <?= $form->field($model, 'textArea')->textarea(['rows' => 5, 'cols' => 80])
        ->label('Describe Your problem, please')."</br>" ?>

    <?= $form->field($model, 'file')->fileInput()
        ->hint('Send us a screenshot, it helps to solve Your problem!')."</br>" ?>

    <?= $form->field($model, 'additionalServises')->checkboxlist(['Computer repairing', 'Web design', 'Hosting'])
        ->hint('Which of these additional services do You want to use?')."</br>" ?>

    <?= $form->field($model, 'verifyCode')->widget(
        yii\captcha\Captcha::className(),
        [
            'template' => '<div class="row><div class="col-xs-3">{image}</div><div class="col-xs-4">{input}</div></div>',
        ]
    )->hint('Push a button to renew')."</br>"
    ?>

    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

