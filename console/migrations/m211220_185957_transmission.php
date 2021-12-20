<?php

use yii\db\Migration;

/**
 * Class m211220_185957_transmission
 */
class m211220_185957_transmission extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('modification', 'transmission', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('modification', 'transmission');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211220_185957_transmission cannot be reverted.\n";

        return false;
    }
    */
}
