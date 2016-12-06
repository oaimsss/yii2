<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;
use yii\web\Controller;
use yii\helpers\Url;
use yii\bootstrap\Html;
/**
 * Description of UrlController
 *
 * @author kunx <kunx-edu@qq.com>
 */
class UrlController extends Controller{
    //put your code here
    public function actionIndex() {
        //获取基础路径
        echo Url::base() . '<hr />';
        echo Url::base(true) . '<hr />';
        echo Url::base('ftp') . '<hr />';
        echo Url::canonical() . '<hr />';
        echo Url::home() . '<hr />';
        echo Url::home(true) . '<hr />';
        echo Url::home('wx') . '<hr />';
        //todo::待确认,只是脚本路径吗?
        echo Url::previous() . '<hr />';
        
        Url::remember('http://blog.kunx.org', 'blog');
        echo Url::previous('blog'). '<hr />';
        
        \Yii::setAlias('@blog', 'http://blog.kunx.org');
        
        //重点:to和toRoute
        echo Url::to('jump',true) . '<br />';
        echo Url::to(['jump'],'ftp') . '<br />';
        echo Url::to('@blog/tag/php','https') . '<br />';
        echo Url::toRoute('jump',true) . '<br />';
        //带有参数的url地址
        echo Url::to(['jump','name'=>'kunx'],'ftp') . '<br />';
        echo Url::to(['@blog','tag'=>'php'],'https') . '<br />';
        
        
    }
    
    public function actionJump() {
        echo Url::previous('blog'). '<hr />';
        echo Html::a('到首页',Url::to(['index']));
    }
}
