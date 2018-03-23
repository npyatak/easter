<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\components\ElfinderInput;
?>

<div class="add-form">
    <?php $form = ActiveForm::begin();?>
    <?php $params = Yii::$app->params['defaultShare'];?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'title')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'alias')->textInput() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'cooking_time')->textInput() ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'show_on_main')->checkbox();?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'ingredient')->textarea() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'instruction')->textarea();?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'video')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'image')->widget(ElfinderInput::className());?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>