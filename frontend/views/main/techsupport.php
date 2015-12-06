<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\components\FirstWidget;
use frontend\components\SecondWidget;
use yii\bootstrap\Modal;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model \yii\db\ActiveRecord */
/* @var $model \frontend\models\TechsupportForm */
/* @var $form ActiveForm */

$this->registerJsFile('@web/js/main-index.js',['position' => $this::POS_HEAD],'main-index');
$this->registerJs('alert("Lets fill a form!")', $this::POS_READY, 'hello-message');
$this->registerCssFile('@web/css/main.css');
$this->registerCss("body {background: #9f6;}");
?>

<?php

echo 'Choose a date, please ';
echo DatePicker::widget([
    'attribute' => 'from_date',
    //'language' => 'ru',
    //'dateFormat' => 'yyyy-MM-dd',
]);

?>

<div class="techsupport">

    <?php

    Modal::begin([
        'header' => '<h2>Modal widget works!</h2>',
        'toggleButton' => ['label' => 'Push to check how Modal widget works'],
    ]);

    echo 'It is a modal window content';

    Modal::end();

    ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')."</br>" ?>

    <?= $form->field($model, 'surname')."</br>" ?>

    <?= $form->field($model, 'age')."</br>" ?>

    <?= $form->field($model, 'email')."</br>" ?>

    <?= $form->field($model, 'phone_number')."</br>" ?>

    <?= $form->field($model, 'sex')->radiolist(['Male', 'Female'])."</br>" ?>

    <?= $form->field($model,'status')->dropDownList([

        '0' => 'I am a new user',
        '1' => 'I use this service from 1 to 3 years',
        '2' => 'I use this service from 3 to 5 years',
        '3' => 'I use this service more then 5 years'


    ])."</br>";

    ?>

    <?= $form->field($model, 'text_area')->textarea(['rows' => 5, 'cols' => 80])
        ->label('Describe Your problem, please')."</br>" ?>

    <?= $form->field($model, 'file')->fileInput()
        ->hint('Send us a screenshot, it helps to solve Your problem!')."</br>" ?>

    <?= $form->field($model, 'website')->hint('Please, input URL of Your site')."</br>" ?>

    <?= $form->field($model, 'additional_services')->checkboxlist(['Computer repairing', 'Web design', 'Hosting', 'Nothing'])
        ->hint('Which of our additional services do You want to use?')."</br>" ?>

    <?= $form->field($model, 'estimation')->hint('Please, estimate our service from 1 to 5')."</br>" ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- techsupport -->

<?= FirstWidget::widget(
    [
        'a' => 33, 'b' => 67
    ]);
?>

<? SecondWidget::begin() ?>

    <h3>My second widget</h3>
    It is my SecondWidget text.

<? SecondWidget::end() ?>

