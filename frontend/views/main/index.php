<?php

use frontend\components\FirstWidget;
use frontend\components\SecondWidget;
use yii\bootstrap\Modal;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $hello string */
$this->registerJsFile('@web/js/main-index.js',['position' => $this::POS_HEAD],'main-index');
$this->registerJs('alert("Привет МИР!!!")', $this::POS_READY, 'hello-message');
$this->registerCssFile('@web/css/main.css');
$this->registerCss("body {background: #ff0;}");
?>
<h1>main/index</h1>

<p>
    <?= $hello ?>
</p>
<?= FirstWidget::widget(
    [
        'a' => 33, 'b' => 67
    ]
); ?>
<? SecondWidget::begin() ?>

Этот текст сделаем красным.

<? SecondWidget::end() ?>

<?php
Modal::begin([
    'header' => '<h2>Привет МИР!!!</h2>',
    'toggleButton' => ['label' => 'нажми'],
]);

echo 'Это контент модального окна';

Modal::end();
?>
<br>

<?php

echo 'Выберите дату ';
echo DatePicker::widget([
    'attribute' => 'from_date',
    //'language' => 'ru',
    //'dateFormat' => 'yyyy-MM-dd',
]);

