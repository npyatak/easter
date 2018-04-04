<?php
use yii\helpers\Url;
?>

<div class="bottom">
    <div class="top__part">
        <img class="cupcake-icon" src="/images/icons/cupcake.png" alt="">
        <h1 class="title">Другие рецепты куличей</h1>
        <?php if(!in_array(Yii::$app->controller->action->id, ['recipies', 'eastercake'])):?>
            <a href="<?=Url::toRoute(['site/recipies']);?>" class="link">Смортеть все</a>
        <?php endif;?>
    </div>
    <?php if($this->params['previews']):?>
    <div class="cards-wrapper">
        <div class="container">
            <div class="row">
                <?php foreach ($this->params['previews'] as $p):?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <img src="<?=$p->image;?>" alt="<?=$p->title;?>">
                            <div class="text">
                                <h1 class="title"><?=$p->title;?></h1>
                                <a href="<?=$p->link;?>" class="link">Читать</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <?php endif;?>
</div>