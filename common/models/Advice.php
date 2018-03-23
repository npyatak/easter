<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advice".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $preview_image
 * @property string $text
 * @property string $preview
 * @property int $show_on_main
 */
class Advice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advice';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['text'], 'safe'],
            [['show_on_main'], 'integer'],
            [['title', 'image', 'preview_image', 'preview'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'preview_image' => 'Изображение превью',
            'text' => 'Текст',
            'preview' => 'Текст превью',
            'title' => 'Заголовок',
            'show_on_main' => 'Показать на главной',
            'image' => 'Изображение',
        ];
    }
}
