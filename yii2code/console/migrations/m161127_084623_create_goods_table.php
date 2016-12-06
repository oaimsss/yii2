<?php

use yii\db\Migration;

/**
 * Handles the creation of table `goods`.
 */
class m161127_084623_create_goods_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('goods', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(50)->notNull()->comment('商品名称'),
            'price'=>$this->decimal(10,2)->notNull()->defaultValue('0.00')->comment('价格'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('goods');
    }
}
