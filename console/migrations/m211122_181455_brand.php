<?php

use yii\db\Migration;

/**
 * Class m211122_181455_brand
 */
class m211122_181455_brand extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('brand', [
            'id' => $this->primaryKey(),
            'country_id' => $this->integer(),
            'name' => $this->string(),
            'code' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('brand');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211122_181455_brand cannot be reverted.\n";

        return false;
    }
    */
}
