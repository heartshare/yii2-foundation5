<?php

namespace plastique\foundation5;

use yii\web\AssetBundle;

class FlagIconsAsset extends AssetBundle
{
    public $sourcePath = '@bower/flag-icon-css';
    
    public $css = [
        'css/flag-icon.min.css',
    ];
}
