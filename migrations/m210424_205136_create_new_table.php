<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%new_posts}}`.
 */
class m210424_205136_create_new_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%new_posts}}', [
            'id' => $this->primaryKey(),
            'text' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%new_posts}}');
    }
}
