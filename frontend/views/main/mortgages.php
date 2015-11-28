<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MortgagesForm */
/* @var $form ActiveForm */
?>
<div class="mortgages">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'subject_type') ?>
        <?= $form->field($model, 'weight') ?>
        <?= $form->field($model, 'assessed_value') ?>
        <?= $form->field($model, 'fineness') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- mortgages -->
