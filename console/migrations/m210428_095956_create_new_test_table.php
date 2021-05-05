<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%new_test}}`.
 */
class m210428_095956_create_new_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%new_test}}', [
            'id' => $this->primaryKey(),
            'title_news' => $this->string(255),
            'content_nes' => $this->text(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%new_test}}');
    }
}
