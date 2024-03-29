<?php

use yii\db\Migration;

class m180326_113435_create_table_page extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%page}}', [
            'id' => $this->primaryKey(),
            'url' => $this->string(255)->notNull(),
            'title' => $this->string(255)->notNull(),
            'text' => $this->getDb()->getSchema()->createColumnSchemaBuilder('longtext'),
            'text_additional' => $this->text(),
            'keywords' => $this->text(1000),
            'description' => $this->text(1000),
            'status' => $this->integer(1)->defaultValue(5),
            'is_page' => $this->integer(1)->defaultValue(1),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->batchInsert('{{%page}}', ['url', 'title', 'is_page', 'text', 'created_at', 'updated_at'],  [
            ['rules', 'Правила', 0, '', time(), time()]
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%page}}');
    }
}