<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */

namespace frontend\assets;
use yii\bootstrap\BootstrapAsset;
/**
 * Description of DemoAsset
 *
 * @author kunx <kunx-edu@qq.com>
 */
class DemoAsset extends \yii\web\AssetBundle{
    //put your code here
    public $sourcePath = '@app/assets/static';
    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $css = [
        'css/demo.css'
    ];
    public $js = [
        'js/kunx.js'
    ];
    
    public $depends = [
//       'yii\bootstrap\BootstrapAsset'
    ];
}
