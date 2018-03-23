<?php
use yii\helpers\Html;

$this->title = 'Добавить совет';
$this->params['breadcrumbs'][] = ['label' => 'Советы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
