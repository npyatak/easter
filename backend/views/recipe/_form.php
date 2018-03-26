<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\components\ElfinderInput;
use mihaildev\ckeditor\CKEditor;
?>

<div class="add-form">
    <?php $form = ActiveForm::begin();?>
    <?php $params = Yii::$app->params['defaultShare'];?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'alias')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'type')->dropDownList($model->typesArray, ['prompt' => 'Не определено']);?>
        </div>
        <!-- <div class="col-md-3">
            <?= $form->field($model, 'cooking_time')->textInput() ?>
        </div> -->
        <div class="col-sm-3">
            <?= $form->field($model, 'show_on_main')->checkbox();?>
        </div>
    </div>

    <?= $form->field($model, 'ingredient')->widget(CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
            'allowedContent' => true,
        ])
    ]);?>

    <?= $form->field($model, 'instruction')->widget(CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
            'allowedContent' => true,
        ])
    ]);?>

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