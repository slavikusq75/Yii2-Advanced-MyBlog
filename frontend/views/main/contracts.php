<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ContractsForm */
/* @var $form ActiveForm */
?>
<div class="contracts">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'contract_number') ?>
        <?= $form->field($model, 'contract_date') ?>
        <?= $form->field($model, 'client_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- contracts -->
