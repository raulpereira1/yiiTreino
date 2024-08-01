<?php

namespace frontend\assets\myAsset;

use yii\web\AssetBundle;

class FirstAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',

    ];

}