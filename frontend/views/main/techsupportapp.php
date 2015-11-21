<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TechSupportApp */
/* @var $form ActiveForm */
?>
<div class="techsupportapp">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'userame') ?>
        <?= $form->field($model, 'email') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- techsupportapp -->
