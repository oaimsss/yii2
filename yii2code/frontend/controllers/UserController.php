<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-26 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\User;

/**
 * Description of UserController
 *
 * @author kunx <kunx-edu@qq.com>
 */
class UserController extends Controller {
    
    public function actions() {
        return [
            'demo'=>[
                'class'=> \frontend\components\DemoAction::className(),
                'name'=>'kunx',
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::className(),
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
//    public $layout = false;
    public $defaultAction = 'add';

    /**
     * 展示列表.
     * 1.创建模型对象
     * 2.执行查询
     * 3.传递数据
     * 4.渲染视图
     */
    public function actionIndex() {
//        $this->layout = false;
        $list = User::find()->asArray()->all();
        return $this->render('index', ['list' => $list]);
    }

    /**
     * 渲染添加表单.
     * @return type
     */
    public function actionAdd() {
        $model = new User;
        return $this->render('add',['model'=>$model]);
    }

    /**
     * 1.要使用数据表,必须创建模型类.必须配置数据库连接信息.
     * 2.要想使用模板,必须调用render方法,并且需要使用return返回
     * 3.如果不是执行insert操作,就不要使用new
     */
    public function actionSave() {
        if(\Yii::$app->request->isPost){
            //收集数据
            $userModel       = new User;
            $userModel->name = $_POST['name'];
            $userModel->age  = $_POST['age'];

            //执行添加
            $userModel->save();
        }else{
            //session
            \Yii::$app->session->setFlash('error', ['请求方式不合法', '哈哈哈']);
            $this->redirect(['index']);
        }
    }

    public function actionConfig() {
        $app  = \Yii::$app;
        $id   = $app->id;
        $db   = $app->db;
        $blog = $app->params['blog'];
        var_dump($id, $blog, $db);
    }

    public function actionAlias() {
        //设置一个别名,叫blog
        \Yii::setAlias('@blog', 'http://blog.kunx.org') .'<br />';
        echo \Yii::getAlias('@blog') . '<br />';
        echo \Yii::getAlias('@webroot') . '<br />';
        echo \Yii::getAlias('@common') . '<br />';
        echo \Yii::getAlias('@frontend') . '<br />';
        echo \Yii::getAlias('@backend') . '<br />';
        echo \Yii::getAlias('@console') . '<br />';
        echo \Yii::getAlias('@xiaohua') . '<br />';
        echo \Yii::getAlias('@xiaohuahua') . '<br />';
        echo \Yii::getAlias('@yii') . '<br />';
        echo \Yii::getAlias('@app') . '<br />';
    }
    
    public function actionEdit($id) {
        echo __METHOD__;
    }
    
    public function actionInfo($id) {
        echo __METHOD__;
    }

}
