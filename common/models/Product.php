<?php

namespace common\models;

use Yii;

class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description', 'link'], 'string'],
            [['type'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
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
            'description' => 'Описание',
            'link' => 'Ссылка',
            'type' => 'Тип',
        ];
    }

    public function getTypesArray() {
        return [
            1 => 'Выпечка',
            2 => 'Декор',
            3 => 'Десерты',
            4 => 'Консервация',
        ];
    }

    public function getTypeLabel() {
        return $this->type ? $this->typesArray[$this->type] : null;
    }
}
