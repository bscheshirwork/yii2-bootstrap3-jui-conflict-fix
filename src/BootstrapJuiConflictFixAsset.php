<?php

namespace bscheshirwork\bjf;

use yii\web\AssetBundle;

/**
 * Depends order of asset bundle.
 *
 * Put this bundle into top of conflict view:
 *
 * bscheshirwork\bjf\BootstrapJuiConflictFixAsset::register($this);
 */
class BootstrapJuiConflictFixAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     * @var array
     */
    public $depends = [
        'yii\jui\JuiAsset',
        'bscheshirwork\bjf\BootstrapJuiFix',
        'yii\bootstrap\BootstrapAsset',
    ];
}
