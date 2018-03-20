<?php

use yii\db\Migration;

class m180320_155340_create_table_post extends Migration
{
    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'ig_user_id' => $this->bigInteger()->notNull(),
            'ig_post_id' => $this->bigInteger()->notNull()->unique(),
            'ig_caption' => $this->text(),
            'image' => $this->string(),
            'score' => $this->integer()->notNull()->defaultValue(0),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
            'image_orientation' => $this->integer(1),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

    }

    public function safeDown() {
        $this->dropTable('{{%post}}');
    }
}
