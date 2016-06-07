<?php

namespace blackwave\accessibility;

use yii\web\AssetBundle;

/**
 * @author  Dmitry Belov <dmitry15web@gmail.com>
 */
class WebAccessibilityAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/web-accessibility/dist';

    /**
     * @var array
     */
    public $css = [
        'accessibility.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'accessibility.min.js',
    ];
}