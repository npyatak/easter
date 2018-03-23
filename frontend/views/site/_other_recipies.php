<?php
use yii\helpers\Url;
?>

<div class="bottom">
    <div class="top__part">
        <img class="cupcake-icon" src="/images/icons/cupcake.png" alt="">
        <h1 class="title">Другие рецепты куличей</h1>
        <a href="<?=Url::toRoute(['site/recipies']);?>" class="link">Смортеть все</a>
    </div>
    <?php if($this->params['recipies']):?>
    <div class="cards-wrapper">
        <div class="container">
            <div class="row">
                <?php foreach ($this->params['recipies'] as $recipe):?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <img src="<?=$recipe->image;?>" alt="<?=$recipe->title;?>">
                            <div class="text">
                                <h1 class="title"><?=$recipe->title;?></h1>
                                <a href="<?=$recipe->url;?>" class="link">Читать</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <?php endif;?>
</div>