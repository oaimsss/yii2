<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-26 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;
use yii\web\Controller;
/**
 * Description of RequestController
 *
 * @author kunx <kunx-edu@qq.com>
 */
class RequestController extends Controller{
    //put your code here
    public function actionIndex() {
        //获取请求方式
        echo \Yii::$app->request->getMethod() . '<br />';
        $request = new \yii\web\Request;
        echo $request->getMethod(). '<br />';
        echo $request->method. '<br />';
        var_dump($request->isAjax);
        var_dump($request->isGet);
        var_dump($request->isPost);
        //获取请求数据
        $getVals = $request->get('name');
        var_dump($getVals);
        $headers = $request->getHeaders();
        var_dump($headers);
        echo '<hr />';
        $tags = $request->getETags();
        var_dump($tags);
        var_dump($request->getPathInfo());
    }
}
