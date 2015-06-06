<?php

namespace plastique\foundation5\assets;

use yii\web\AssetBundle;

class FoundationIconFontsAsset extends AssetBundle
{
    public $sourcePath = '@bower/foundation-icon-fonts';
    
    public $css = [
        'foundation-icons.css',
    ];
}
