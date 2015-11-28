<?php
/**
 *
 * @var \frontend\models\TechsupportForm $model
 */
use yii\helpers\Html;
?>
<p>You sent follow information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Surname</label>: <?= Html::encode($model->surname) ?></li>
    <li><label>Age</label>: <?= Html::encode($model->age) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Phone number</label>: <?= Html::encode($model->phone_number) ?></li>
    <li><label>Sex</label>: <?= Html::encode($model->sex) ?></li>
    <li><label>Additional services</label>: <?= Html::encode($model->additional_services) ?></li>

</ul>