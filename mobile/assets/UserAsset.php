<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace mobile\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class UserAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/mobile';

    public $css = [
//        'css/amazeui.min.css',
//        'css/mobile.css',         
//        'css/styles.css',
    ];
    public $js = [
//        'js/jquery.min.js',
//        'js/amazeui.min.js',      
//        'js/main.js',       
    ];
    public $depends = [
        'mobile\assets\MainAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}

