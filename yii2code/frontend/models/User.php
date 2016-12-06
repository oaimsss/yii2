<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-11-26 
 * @license kunx-edu@qq.com.
 */

namespace frontend\models;
use yii\db\ActiveRecord;
/**
 * Description of User
 *
 * @author kunx <kunx-edu@qq.com>
 */
class User extends ActiveRecord{
    //put your code here
    
    public function rules() {
        return [
            ['name','required'],
        ];
    }
    public function attributeLabels() {
        return [
            'name'=>'姓名',
            'age'=>'年龄',
        ];
    }
}
