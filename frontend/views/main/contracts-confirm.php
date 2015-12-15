<?php
/**
 *
 * @var \frontend\models\ContractsForm $model
 */
use yii\helpers\Html;
?>
<p>You sent follow information:</p>

<ul>
    <li><label>Contract number</label>: <?= Html::encode($model->contract_number) ?></li>
    <li><label>Contract date</label>: <?= Html::encode($model->contract_date) ?></li>
    <li><label>Client ID</label>: <?= Html::encode($model->client_id) ?></li>
</ul>