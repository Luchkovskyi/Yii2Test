<?php

use yii\db\Migration;
use yii\db\Schema;


/**
 * Handles the creation of table `Picture`.
 */
class m170515_172128_create_Picture_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('Picture', [
            'id' => $this->primaryKey(),
            'file' => Schema::TYPE_TEXT,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('Picture');
    }
}
