<?php

namespace bscheshirwork\bjf;

use yii\web\AssetBundle;

/**
 * JS redefine (bridge) between jui and bootstrap
 */
class BootstrapJuiFix extends AssetBundle
{
    /**
     * Publish entire directory.
     * @inheritdoc
     */
    public $sourcePath = __DIR__;

    /**
     * {@inheritdoc}
     * @var array
     */
    public $js = [
         'bootstrap-jui-fix.js',
    ];

    /**
     * {@inheritdoc}
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
