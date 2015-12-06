<?php
use frontend\assets\AppAsset;
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 14.11.15
 * Time: 16:43
 */
/* @var $content string */
/* @var $this \yii\web\View */
AppAsset::register($this);
$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?=Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']); ?>
    <title><?= Yii::$app->name ?></title>
    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<h1>Technical support application form</h1></br>

<?= $content ?>

<h1>Thank You for Your appeal!</h1>
<?php $this->endBody(); ?>
</body>
</html>
<?php
$this->endPage();