<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;
use yii\web\Controller;
/**
 * Description of StaticController
 *
 * @author kunx <kunx-edu@qq.com>
 */
class StaticController extends Controller{
    //put your code here
    public function actionIndex() {
        return $this->renderPartial('index');
        
    }
}
