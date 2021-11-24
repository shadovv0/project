<?php

use yii\db\Migration;

/**
 * Class m211122_181652_generation
 */
class m211122_181652_generation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('generation', [
            'id' => $this->primaryKey(),
            'model_id' => $this->integer(),
            'name' => $this->string(),
            'code' => $this->string(),
            'dt_start' => $this->date(),
            'dt_end' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('generation');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211122_181652_generation cannot be reverted.\n";

        return false;
    }
    */
}
