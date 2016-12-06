<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-26 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;
use yii\web\Controller;
/**
 * Description of GoodsInfoController
 *
 * @author kunx <kunx-edu@qq.com>
 */
class GoodsInfoController extends Controller{
    //put your code here
    public function actionIndex() {
        echo __METHOD__;
        $this->render('index');
    }
}
