<?php
/**
 *
 * @var \frontend\models\ChecksForm $model
 */
use yii\helpers\Html;
?>
<p>You sent follow information:</p>

<ul>
    <li><label>Check number</label>: <?= Html::encode($model->check_number) ?></li>
    <li><label>Check summ</label>: <?= Html::encode($model->check_summ) ?></li>
    <li><label>Check date</label>: <?= Html::encode($model->check_date) ?></li>
</ul>