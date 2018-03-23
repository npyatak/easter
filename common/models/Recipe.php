<?php

namespace common\models;

use Yii;

use yii\helpers\Url;
/**
 * This is the model class for table "recipe".
 *
 * @property int $id
 * @property string $title
 * @property string $cooking_time
 * @property string $ingredient
 * @property string $instruction
 * @property string $video
 */
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
            [['title'], 'required'],
            [['title', 'cooking_time', 'ingredient', 'instruction', 'video', 'image'], 'string'],
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
        ];
    }

    public function getUrl() {
        return Url::toRoute(['site/recipe', 'id' => $this->id]);
    }
}
