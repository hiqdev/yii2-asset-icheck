<?php

/*
 * Yii 2 asset for bower iCheck
 *
 * @link      https://github.com/hiqdev/yii2-asset-icheck
 * @package   yii2-asset-icheck
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assets\icheck;

/**
 * Asset bundle for iCheck plug-in for jQuery.
 */
class iCheckAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/icheck';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'skins/all.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'icheck.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
