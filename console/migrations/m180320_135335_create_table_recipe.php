<?php

use yii\db\Migration;

class m180320_135335_create_table_recipe extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/recipes/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%recipe}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'cooking_time' => $this->string(),
            'ingredient' => $this->text(),
            'instruction' => $this->text(),
            'video' => $this->string(255),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%recipe}}');
    }
}