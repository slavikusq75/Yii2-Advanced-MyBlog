<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.15
 * Time: 1:27
 */
use yii\helpers\Html;
?>
<p>You outputed follow information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Surname</label>: <?= Html::encode($model->surname) ?></li>
    <li><label>Age</label>: <?= Html::encode($model->age) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>