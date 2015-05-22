<?php
/**
 * @link      http://hiqdev.com/yii2-asset-icheck
 * @license   BSD 3-clause
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\assets\icheck;

/**
 * Asset bundle for iCheck plug-in for jQuery.
 */
class iCheckAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/admin-lte';

    /**
     * @inheritdoc
     */
    public $css = [
        'skins/all.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'icheck.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
