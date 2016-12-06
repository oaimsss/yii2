<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-27 
 * @license kunx-edu@qq.com.
 */

namespace frontend\components;

/**
 * Description of Demo
 *
 * @author kunx <kunx-edu@qq.com>
 */
class DemoAction extends \yii\base\Action{
    public $name;
    //put your code here
    public function run() {
        echo 'hello ' . $this->name;
    }
}
