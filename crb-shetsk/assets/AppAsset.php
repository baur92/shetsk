<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/styles.css',
        'css/layerslider.css',
        'css/fullwidth/skin.css',
        'css/font-awesome.css',
        'css/owl.carousel.css',
        'css/jquery.fancybox.css',
        'css/color-blue.css',
        'tuner/css/styles.css'
    ];
    public $js = [
        'tuner/js/scripts.js',
        'js/main.js',
        'js/jquery.min.js',
        'js/jquery-ui.min.js',
        'js/jquery.migrate.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.isotope.min.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.fancybox-media.js',
        'js/jquery.flot.js',
        'js/jquery.flot.pie.js',
        'js/jquery.flot.categories.js',
        'js/greensock.js',
        'js/layerslider.transitions.js',
        'js/layerslider.kreaturamedia.jquery.js',
        'js/jquery.superscrollorama.js',
        'js/TweenMax.min.js',
        'js/TimelineMax.min.js',
        'js/jquery.ui.core.min.js',
        'js/jquery.ui.widget.min.js',
        'js/jquery.ui.tabs.min.js',
        'js/jquery-ui-tabs-rotate.js',
        'js/jquery.ui.accordion.min.js',
        'js/jquery.tweet.js',
        'js/jquery.easypiechart.js',
        'js/scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
