<?php

use yii\db\Migration;

class m180404_152754_alter_table_preview extends Migration
{
    
    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->addColumn('preview', 'order', $this->integer());
    }

    public function safeDown() {
        $this->dropColumn('preview', 'order');
    }
}