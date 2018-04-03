<?php 
use yii\widgets\ListView;
use kop\y2sp\ScrollPager;
?>

<div class="general-page">
    <div class="first-block">
        <div class="">
            <div class="inner">
                <h1>Пасха с Dr. Oetker</h1>
                <h2>Раз в год в наши дома приходит Пасха.</h2>
                <p>А с ней чудесные ароматы выпечки, ванили, корицы. <br>В доме по-особенному светло и хорошо!</p>
                <div class="text-center">
                    <span class="participants-arrow"><span class="fa fa-angle-down"></span></span>
                </div>
            </div>
        </div>
    </div>
</div>
    <?=$this->render('_products');?>
<div class="participants">
    <h1 class="block__title">
        Участники
    </h1>
    <div class="container">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'layout' => "{items} {pager}",
            'itemOptions' => ['class' => 'post-item col-md-3 col-sm-4 col-xs-12'],
            'itemView' => '_post',
            'options' => ['class' => 'row', 'id' => 'posts'],
            'pager' => [
                'class' => ScrollPager::className(), 
                'triggerText' => 'Загрузить ещё',
                'triggerTemplate' => '<div class="ias-trigger action__block"><button class="p-btn btn-rounded">{text}</button></div>',
                'container' => '#posts',
                'item' => '.post-item',
                'negativeMargin' => 1000,
                'delay' => 10,
                'paginationSelector' => '#posts .pagination',
                'enabledExtensions' => [
                    ScrollPager::EXTENSION_TRIGGER,
                ]
            ],
        ]);?>
    </div>
</div>