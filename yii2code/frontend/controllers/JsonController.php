<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;
use yii\web\Controller;
/**
 * Description of JsonController
 *
 * @author kunx <kunx-edu@qq.com>
 */
class JsonController extends Controller{
    //put your code here
    public function actionIndex() {
        $data = [
            'name'=>'张三',
            'age'=>17
        ];
        
        echo json_encode($data) . '<hr />';
        echo \yii\helpers\Json::encode($data) . '<hr />';
        
        
    }
}
