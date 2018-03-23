<?php

use yii\db\Migration;

class m180323_124935_create_table_advice extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%advice}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'image' => $this->string(255),
            'preview_image' => $this->string(255),
            'text' => $this->text(),
            'preview' => $this->string(),
            'show_on_main' => $this->integer(1)->notNull()->defaultValue(0),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%advice}}');
    }
}