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
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model,'status')->dropDownList([

        '0' => 'Active',
        '1' => 'Turned off',
        '2' => 'Deleted'

    ]);

    ?>

    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

