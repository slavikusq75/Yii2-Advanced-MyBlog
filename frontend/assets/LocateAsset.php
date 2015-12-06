<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 06.12.15
 * Time: 20:49
 */
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LocateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/locate.js',
        'js/geoPosition.js',
        'http://maps.google.com/maps/api/js?sensor=false',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_END
    ];
    public $depends = [
    ];
}
