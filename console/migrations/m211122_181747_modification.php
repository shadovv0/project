<?php

use yii\db\Migration;

/**
 * Class m211122_181747_modification
 */
class m211122_181747_modification extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('modification', [
            'id' => $this->primaryKey(),
            'generation_id' => $this->integer(),
            'name' => $this->string(),
            'code' => $this->string(),
            'engine_type' => $this->integer(),
            'engine_volume' => $this->float(),
            'power' => $this->float(),
            'price' => $this->float(),
            'transmission' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('modification');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211122_181747_modification cannot be reverted.\n";

        return false;
    }
    */
}
