<?php

use yii\db\Migration;

/**
 * Class m180220_100248_create_table_product
 */
class m180322_100248_create_table_product extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/candidates/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'image' => $this->string(255),
            'link' => $this->string(255),
            'description' => $this->text(),
            'type' => $this->integer(1),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}