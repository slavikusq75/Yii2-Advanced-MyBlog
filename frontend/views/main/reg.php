<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RegForm */
/* @var $form ActiveForm */
?>
<div class="main-reg">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- main-reg -->
