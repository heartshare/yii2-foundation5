<?php

namespace plastique\foundation5;

use yii\web\AssetBundle;

class FoundationAsset extends AssetBundle
{
    public $sourcePath = '@bower/foundation';
    
    public $css = [
        'css/normalize.min.css',
        'css/foundation.min.css',
    ];
    public $js = [
        'js/vendor/fastclick.js',
        'js/foundation.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'plastique\foundation5\FlagIconsAsset'
    ];
}
