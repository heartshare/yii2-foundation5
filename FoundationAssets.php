<?php

namespace plastique\foundation5;

use yii\web\AssetBundle;

class FoundationAsset extends AssetBundle
{
    public $sourcePath = '@bower/foundation';
    
    public $css = [
        'css/normalize.css',
        'css/foundation.css',
    ];
    public $js = [
        'js/vendor/fastclick.js',
        'js/foundation.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
