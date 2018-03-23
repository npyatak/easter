<?php

use yii\db\Migration;

class m180323_130035_create_table_preview extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%preview}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'image' => $this->string(255),
            'link' => $this->string(255)->notNull(),
            'show_on_main' => $this->integer(1)->notNull()->defaultValue(1),
        ], $tableOptions);
        
        $this->batchInsert('{{%preview}}', ['image', 'title', 'link'], [
            ['/images/recepie-page/cards/card-2.jpg', 'Бездрожжевой кулич', 'http://academy.oetker.ru/recipes/4601/'],
            ['/images/recepie-page/cards/card-3.jpg', 'Дрожжевой кулич с меренгой', 'http://academy.oetker.ru/recipes/4600/'],
            ['/images/recepie-page/cards/card-4.jpg', 'Пасхальный кулич', 'http://academy.oetker.ru/recipes/4597/'],
            ['/images/recepie-page/cards/card-5.jpg', 'Творожный кулич', 'http://academy.oetker.ru/recipes/4596/'],
            ['/images/recepie-page/cards/card-6.jpg', 'Итальянский кулич', 'http://academy.oetker.ru/recipes/4568/'],
            ['/images/recepie-page/cards/card-7.jpg', 'Маковый кулич', 'http://academy.oetker.ru/recipes/4561/'],
            ['/images/recepie-page/cards/card-8.jpg', 'Кулич на Пасху (на сливках)', 'http://academy.oetker.ru/recipes/4553/'],
            ['/images/recepie-page/cards/card-9.jpg', 'Кулич с цукатами и орешками', 'http://academy.oetker.ru/recipes/4541/'],
            ['/images/recepie-page/cards/card-10.jpg', 'Бездрожжевой кулич', 'http://academy.oetker.ru/recipes/4543/'],
            ['/images/recepie-page/cards/card-11.jpg', 'Кулич-бриошь', 'http://academy.oetker.ru/recipes/4552/'],
            ['/images/recepie-page/cards/card-12.jpg', 'Быстрые пасхальные куличи', 'http://academy.oetker.ru/recipes/4517/'],
            ['/images/recepie-page/cards/card-13.jpg', 'Творожный кулич', 'http://academy.oetker.ru/recipes/4530/'],
            ['/images/recepie-page/cards/card-14.jpg', 'Творожный кулич', 'http://academy.oetker.ru/recipes/4501/'],
            ['/images/recepie-page/cards/card-15.jpg', 'Александрийский кулич', 'http://academy.oetker.ru/recipes/4476/'],
            ['/images/recepie-page/cards/card-16.jpg', 'Мини-куличики', 'http://academy.oetker.ru/recipes/3978/'],
            ['/images/recepie-page/cards/card-17.jpg', 'Куличи "Нежные"', 'http://academy.oetker.ru/recipes/4465/'],
            ['/images/recepie-page/cards/card-18.jpg', 'Апельсиновый кулич с шоколадом', 'http://academy.oetker.ru/recipes/3953/'],
            ['/images/recepie-page/cards/card-19.jpg', 'Кулич для малышки', 'http://academy.oetker.ru/recipes/3910/'],
            ['/images/recepie-page/cards/card-20.jpg', 'Бабушкин кулич', 'http://academy.oetker.ru/recipes/3428/'],
            ['/images/recepie-page/cards/card-21.jpg', 'Ванильный кулич', 'http://academy.oetker.ru/recipes/3402/'],
            ['/images/recepie-page/cards/card-22.jpg', 'Кулич плетёный', 'http://academy.oetker.ru/recipes/3381/'],
            ['/images/recepie-page/cards/card-1.jpg', 'Мини-куличи с апельсиновыми цукатами', 'https://www.edimdoma.ru/retsepty/97948-mini-kulichi-s-apelsinovymi-tsukatami'],
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%preview}}');
    }
}