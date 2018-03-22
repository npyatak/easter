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
        'css/site.css',
        'css/slick.css',
        'css/slick-theme.css',
        'css/slider-styles.css',
        'css/general-page.css',
    ];
    public $js = [
        'js/jquery-3.3.1.min.js',
        'js/slick.min.js',
        'js/main.js',
        'js/general-page.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
