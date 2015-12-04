<?php
/**
 *
 * @var \frontend\models\ClientsForm $model
 */
use frontend\models\ClientsForm;
use yii\helpers\Html;
?>

<p>You sent follow information:</p>

<ul>
    <li><label>Family name</label>: <?= Html::encode($model->family_name) ?></li>
    <li><label>First name</label>: <?= Html::encode($model->first_name) ?></li>
    <li><label>Birth date</label>: <?= Html::encode($model->birth_date) ?></li>
</ul>

