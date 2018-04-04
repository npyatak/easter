<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\widgets\Pjax;

use common\models\Card;

$this->title = 'Превью';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить превью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                'id',
                'order',
                'title',
                [
                    'header' => 'Изображение',
                    'format' => 'raw',
                    'value' => function($data) {
                        return Html::img($data->image, ['width' => '140px']);
                    }
                ],
                'link',
                [
                    'attribute' => 'show_on_main',
                    'format' => 'raw',
                    'value' => function($data) {
                        $arr = [1 => 'Да', 0 => 'Нет'];
                        return $arr[$data->show_on_main];
                    },
                    'filter' => Html::activeDropDownList($searchModel, 'show_on_main', [1 => 'Да', 0 => 'Нет'], ['prompt'=>''])
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} {delete}'
                ],
            ],
        ]); ?>
    <?php Pjax::end(); ?>
</div>
