<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 14.11.15
 * Time: 16:43
 */
/* $var $content string */
?>

<!DOCTYPE html>
<html lang="<?=Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Yii::$app->name ?></title>
</head>
<body>
<p>Upper part of the site</p>

<?= $content ?>

<p>Lower part of the site</p>
</body>
</html>