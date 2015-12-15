<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $model frontend\models\ClientsForm */
/* @var $form ActiveForm */
?>
<div class="clients">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'family_name') ?>
        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'birth_date') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- clients -->



