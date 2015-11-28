<?php
/**
 *
 * @var \frontend\models\MortgagesForm $model
 */
use yii\helpers\Html;
?>
<p>You sent follow information:</p>

<ul>
    <li><label>Subject type</label>: <?= Html::encode($model->subject_type) ?></li>
    <li><label>Weight</label>: <?= Html::encode($model->weight) ?></li>
    <li><label>Assessed value</label>: <?= Html::encode($model->assessed_value) ?></li>
    <li><label>Fineness</label>: <?= Html::encode($model->fineness) ?></li>
</ul>