<?php

namespace common\models;

use Yii;

class Post extends \yii\db\ActiveRecord
{
    const STATUS_NEW = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_BANNED = 5;

    const IMAGE_SQUARE = 1;
    const IMAGE_HORIZONTAL = 2;
    const IMAGE_VERTICAL = 3;

    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ig_user_id', 'ig_post_id', 'ig_caption', 'score', 'status', 'created_at', 'updated_at', 'image_orientation'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    public function behaviors() {
        return [
            [
                'class' => \yii\behaviors\TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imageFile' => 'Фото',
            'score' => 'Баллы',
            'status' => 'Статус',
            'image' => 'Изображение',
            'created_at' => 'Дата/Время создания',
            'updated_at' => 'Время последнего изменения',
            'ig_user_id' => 'ID пользователя инстаграм', 
            'ig_post_id' => 'ID поста инстаграм', 
            'ig_caption' => 'Подпись инстаграм', 
        ];
    }

    public function afterDelete() {
        $path = $this->imageSrcPath;
        if(file_exists($path.$this->image) && is_file($path.$this->image)) {
            unlink($path.$this->image);
        }
        return parent::afterDelete();
    }

    public function getUrl() {
        return Url::toRoute(['/site/post', 'id'=>$this->id]);
    }

    public function getImageSrcPath() {
        return __DIR__ . '/../../frontend/web/uploads/post/';
    }

    public function getImageUrl() {
        return Yii::$app->urlManagerFrontEnd->createAbsoluteUrl('/uploads/post/'.$this->image);
    }

    public function getThumbUrl() {
        $exp = explode('.', $this->image);
        $thumbFileName = $exp[0].'_thumb.'.$exp[1];
        return Yii::$app->urlManagerFrontEnd->createAbsoluteUrl('/uploads/post/'.$thumbFileName);
    }

    public static function getStatusArray() {
        return [
            self::STATUS_NEW => 'Новый',
            self::STATUS_ACTIVE => 'Активен',
            self::STATUS_BANNED => 'Забанен',
        ];
    }

    public function getStatusLabel() {
        return self::getStatusArray()[$this->status];
    }
}
