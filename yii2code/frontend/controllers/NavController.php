<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;
use yii\web\Controller;
/**
 * Description of NavController
 *
 * @author kunx <kunx-edu@qq.com>
 */
class NavController extends Controller{
    //put your code here
    public function actionIndex() {
        return $this->renderPartial('index');
    }
}
