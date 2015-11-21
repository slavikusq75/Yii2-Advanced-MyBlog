<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.15
 * Time: 1:33
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phoneNumber') ?>

    <?= $form->field($model, 'sex')->radiolist(['Male', 'Female']) ?>

    <?= $form->field($model,'status')->dropDownList([

        '0' => 'Active',
        '1' => 'Turned off',
        '2' => 'Deleted'

    ]);

    ?>

    <?= $form->field($model, 'extraservices')->checkboxlist(['1', '2', '3']) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'verifyCode')->widget(
        yii\captcha\Captcha::className(),
        [
            'template' => '<div class="row><div class="col-xs-3">{image}</div><div class="col-xs-4">{input}</div></div>',
        ]
    )->hint('Push a button to renew') ?>

<div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

