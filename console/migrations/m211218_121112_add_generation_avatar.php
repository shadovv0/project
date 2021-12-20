<?php

use yii\db\Migration;

/**
 * Class m211218_121112_add_generation_avatar
 */
class m211218_121112_add_generation_avatar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('generation', 'avatar', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('generation', 'avatar');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211218_121112_add_generation_avatar cannot be reverted.\n";

        return false;
    }
    */
}
