<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;

/**
 * Description of SmsController
 *
 * @author kunx <kunx-edu@qq.com>
 */
class SmsController extends \yii\web\Controller{
    //put your code here
    public function actionIndex() {
        //创建模型对象
        $model = new \frontend\models\SendSMSForm();
        //调用视图
        return $this->render('index',['model'=>$model]);
    }
}
