<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 06.12.15
 * Time: 20:49
 */
class LocateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/styles.css',
        'css/nivo-slider.css',
    ];
    public $js = [
        'js/jquery-1.4.3.min.js',
        'js/jquery.nivo.slider.pack.js',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_END
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
