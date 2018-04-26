<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/fonts.css',
        'css/font-awesome.min.css',
        'css/main.css',
        'css/slick.css',
        'css/slick-theme.css',
        'css/main.css',
        'css/lazy_bone.css?v=260418',
        'css/slider-styles.css?v=260418',
        'css/menu.css',
        'css/responsive-menu.css?v=020418',
    ];
    public $js = [
        'js/slick.min.js',
        'js/main.js',
        'js/general-page.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
