<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ChecksForm */
/* @var $form ActiveForm */
?>
<div class="checks">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'check_number') ?>
        <?= $form->field($model, 'check_summ') ?>
        <?= $form->field($model, 'check_date') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- checks -->
