<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\widgets\Pjax;

use common\models\Product;

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                'id',
                'title',  
                [
                    'header' => 'Изображение',
                    'format' => 'raw',
                    'value' => function($data) {
                        return Html::img($data->image, ['width' => '140px']);
                    }
                ],
                [
                    'attribute' => 'type',
                    'format' => 'raw',
                    'value' => function($data) {
                        return $data->typeLabel;
                    },
                    'filter' => Html::activeDropDownList($searchModel, 'type', Product::getTypesArray(), ['prompt'=>''])
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} {delete}'
                ],
            ],
        ]); ?>
    <?php Pjax::end(); ?>
</div>
