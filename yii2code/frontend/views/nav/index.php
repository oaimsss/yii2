<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
BootstrapAsset::register($this);
$this->beginPage();
?>
<html>
    <head>
        <?php $this->head(); ?>
    </head>
    <body>

        <?php
        $this->beginBody();
        NavBar::begin([
            'brandLabel' => '御风而行',
            'brandUrl'   => 'http://taobao.com',
            'options'    => [
                'class' => 'navbar-inverse'
            ]
        ]);

        $items = [
            'items' => [
                [
                    'label' => 'Home',
                    'url'   => ['site/index'],
                ],
                [
                    'label' => 'blog',
                    'url'   => ['site/blog'],
                ],
            ],
            'options' => ['class' =>'nav-pills'],
        ];
        echo Nav::widget($items);

        NavBar::end();
        $this->endBody();
        echo Html::a('御风而行', Url::to(['blog/index'],true), ['style'=>'color:red']);
        echo Html::tag('sty', "I have a dream", ['style'=>'color:lightblue']);
        echo Html::beginForm('http://xianrentiao.cn/tiaobutiao.html', 'post');
        echo Html::input('text', 'name', '思同杨');
        echo Html::endForm();
        ?>
    </body>
</html>

<?php
$this->endPage();

