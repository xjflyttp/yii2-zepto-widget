<?php

/**
 * Zepto Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\zepto;

use yii\web\AssetBundle;

class ZeptoAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-zepto-widget/assets';
    public $css = [];
    public $js = ['zepto.js'];

}
