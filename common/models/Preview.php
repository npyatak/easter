<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "preview".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $link
 * @property int $show_on_main
 */
class Preview extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'preview';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'link'], 'required'],
            [['show_on_main'], 'integer'],
            [['title', 'image', 'link'], 'string', 'max' => 255],
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
            'image' => 'Изображение',
            'link' => 'Ссылка',
            'show_on_main' => 'Показать на главной',
        ];
    }
}
