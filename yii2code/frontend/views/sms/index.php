<!--<style>
    .demo1{
        max-width:200px
    }
</style>-->
<?php
/* @var $this yii\web\View */
$this->registerCss('.demo1{max-width:200px}');
/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\bootstrap\Button;


$form = ActiveForm::begin([
            'method'  => 'get',
            'options' => [
                'enctype' => 'goodman'
            ],
        ]);
echo $form->field($model, 'tel')->label('手机')->textInput();
echo $form->field($model, 'msg')->textarea(['style' => 'resize:none;']);
echo $form->field($model, 'msg')->passwordInput();
echo $form->field($model, 'msg')->checkbox();
echo $form->field($model, 'msg')->fileInput();
echo $form->field($model, 'msg')->checkboxList(['1'=>'选项1','2'=>'选项2']);

echo $form->field($model, 'msg')->radio();
echo $form->field($model, 'msg')->dropDownList(['1'=>'选项1','2'=>'选项2'],['prompt'=>'请选择','style'=>'','class'=>'demo1 form-control']);
echo $form->field($model, 'msg')->dropDownList(['1'=>'选项1','2'=>'选项2'],['prompt'=>'请选择','style'=>'']);
echo Html::submitInput(' 发送 ', ['class' => 'btn btn-success']);
Button::begin(['label'=>' 点我 ','options'=>['class'=>'btn btn-primary']]);
Button::end();
ActiveForm::end();


