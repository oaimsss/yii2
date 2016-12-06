<?php

/** 
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-26 
 * @license kunx-edu@qq.com.
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
$form = ActiveForm::begin();
echo $form->field($model, 'name');
echo $form->field($model, 'age')->textarea();
echo $form->field($model, 'age')->fileInput();
echo Html::submitButton(' 添加 ',['class'=>'btn btn-primary']);
ActiveForm::end();
