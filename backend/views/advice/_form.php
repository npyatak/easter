<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\components\ElfinderInput;
use mihaildev\ckeditor\CKEditor;
?>

<div class="add-form">
    <?php $form = ActiveForm::begin();?>

    <div class="row">
        <div class="col-md-5">
            <?= $form->field($model, 'title')->textInput() ?>
        </div>
        <div class="col-md-5">
            <?= $form->field($model, 'image')->widget(ElfinderInput::className());?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'show_on_main')->checkbox();?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'preview')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'preview_image')->widget(ElfinderInput::className());?>
        </div>
    </div>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
            'allowedContent' => true,
        ])
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
