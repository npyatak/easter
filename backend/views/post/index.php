<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use kartik\editable\Editable;

use common\models\Post;

$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(['id' => 'grid-pjax']); ?>  
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'rowOptions' => function($model) {
                if($model->status === Post::STATUS_BANNED) {
                    return ['class' => 'danger'];
                } elseif($model->status === Post::STATUS_ACTIVE) {
                    return ['class' => 'success'];
                }
            },
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                [
                    'header' => 'Изображение',
                    'format' => 'raw',
                    'value' => function($data) {
                        return Html::img($data->imageUrl, ['width' => '140px']);
                    }
                ],
                [
                    'attribute' => 'score',
                    'format' => 'raw',
                    'value' => function($data) {
                        return Html::a($data->score, Url::toRoute(['post-action/index', 'PostActionSearch[post_id]' => $data->id]));
                    },
                ], 
                [
                    'class' => 'kartik\grid\EditableColumn',
                    'attribute' => 'status',
                    'headerOptions'=>['class'=>'kv-sticky-column'],
                    'contentOptions'=>['class'=>'kv-sticky-column'],
                    'value' => function($data) {
                        return $data->statusLabel;
                    },
                    'filter' => Html::activeDropDownList($searchModel, 'status', Post::getStatusArray(), ['prompt'=>'']),
                    'editableOptions' => [
                        'inputType' => kartik\editable\Editable::INPUT_DROPDOWN_LIST,
                        'data' => Post::getStatusArray(),
                        'displayValueConfig' => Post::getStatusArray(),
                    ],
                ],
                [
                    'attribute' => 'created_at',
                    'value' => function($data) {
                        return date('d.m.Y H:i', $data->created_at);
                    }
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {update} {delete}',
                ],
            ],
        ]); ?>
    <?php Pjax::end(); ?>
</div>

<?php
$script = "
    $(document).on('click', '.status-toggle', function(e) {
        var obj = $(this);

        $.ajax({
            url: obj.attr('href'),
            type: 'POST',
            success: function(result) {
                $.pjax.reload({container:'#grid-pjax'});
            }
        });

        return false;
    });
";

$this->registerJs($script, yii\web\View::POS_END);?>