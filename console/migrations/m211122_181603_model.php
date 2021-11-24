<?php

use yii\db\Migration;

/**
 * Class m211122_181603_model
 */
class m211122_181603_model extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('model', [
            'id' => $this->primaryKey(),
            'brand_id' => $this->integer(),
            'name' => $this->string(),
            'code' => $this->string(),
            'class' => $this->string(),
            'sort' => $this->integer(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('model');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211122_181603_model cannot be reverted.\n";

        return false;
    }
    */
}
