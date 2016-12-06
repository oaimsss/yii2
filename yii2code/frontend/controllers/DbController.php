<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;
use yii\web\Controller;
/**
 * Description of DbController
 *
 * @author kunx <kunx-edu@qq.com>
 */
class DbController extends Controller{
    //put your code here
    /**
     * 原生sql语句
     */
    public function actionIndex() {
        //创建command对象,该对象用于执行原生的sql代码
//        $command = \Yii::$app->db->createCommand('show databases');
//        $rst = $command->query();
//        var_dump($rst->readAll());
        
        //通过queryAll发送sql语句到mysql服务器,并得到结果集数组
        $rst = \Yii::$app->db->createCommand('show databases')->queryAll();
//        var_dump($rst);
        
        //获取id<5的三国人物,5是从用户输入的数据来的
        $db = \Yii::$app->db;
        $rst = $db->createCommand('select * from {{%user}} where id<:id',[':id'=>5])->queryAll();
        var_dump($rst);
    }
    
    /**
     * command的衍生写法
     */
    public function actionYansheng() {
//        $rst = \Yii::$app->db->createCommand()->insert('user', [
//            'name'=>'马谡',
//            'age'=>17
//        ]);
//        var_dump($rst->execute());
        $rst = \Yii::$app->db->createCommand()->insert('user', [
            'name'=>'藤香锐',
            'age'=>99
        ]);
        var_dump($rst->query());
    }
    
    /**
     * 查询生成器
     */
    public function actionQuery() {
        $query = new \yii\db\Query;
        $list = $query->from('user')->where(['>','id',2])->select('id,name,age')->indexBy('id')->all();
        var_dump($list);
    }
    
    /**
     * activeRecord活跃(动)记录
     */
    public function actionAr() {
        //查询
//        $info = \frontend\models\User::find()->select('name')->asArray()->all();
//        $info = \frontend\models\User::find()->select('name')->where(['id'=>5])->asArray()->all();
//        $info = \frontend\models\User::find()->select('name')->where(['id'=>5])->asArray()->one();
//        $info = \frontend\models\User::find()->select('name')->where(['id'=>5])->asArray()->scalar();
//        //修改
//        $info = \frontend\models\User::find()->where(['id'=>5])->one();
//        $info->age = 6;
//        $info->save();
//        var_dump($info);
//        //删除
//        $info = \frontend\models\User::find()->select('id')->where(['id'=>7])->one();
//        $info->delete();
//        var_dump($info);
        
        //findAll常见操作,查询所有记录
        //findAll不支持有运算符参与的条件,如果传递是字符串,那么会当做主键='',如果是数组,会当做主键 in (...) 如果是关联数组,还是类似的逻辑
//        $list = \frontend\models\User::find()->where(['<','id',5])->createCommand()->getRawSql();
//        $list = \frontend\models\User::findAll(['like','name','zhangsan']);
//        $list = \frontend\models\User::findAll(['name'=>'zhangsan']);
//        $list = \frontend\models\User::findAll(['id'=>'<5']);
//        $list = \frontend\models\User::findBySql('select * from user')->all();
        var_dump($list);
        return $this->render('/nav/index');
    }
    
    public function actionUpdate() {
        //使用updateAll修改指定的数据
        $data = [
            'age'=>16
        ];
        //where id>=5 and id<=5
        \frontend\models\User::updateAll($data, ['like','name','赵']);
    }
    public function actionInfo() {
        phpinfo();
    }
}
