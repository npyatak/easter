<?php

namespace common\models;

use Yii;

use yii\helpers\Url;

class Recipe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recipe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'alias'], 'required'],
            [['title', 'cooking_time', 'ingredient', 'instruction', 'video', 'image', 'alias'], 'string'],
            [['show_on_main'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'cooking_time' => 'Время готовка',
            'ingredient' => 'Ингридиенты',
            'instruction' => 'Инструкция',
            'video' => 'Ссылка на видео',
            'show_on_main' => 'Показать на главной',
            'image' => 'Изображение',
            'alias' => 'Алиас',
        ];
    }

    public function getUrl() {
        return Url::toRoute(['site/recipe', 'alias' => $this->alias]);
    }
}
