<?php
use yii\helpers\Url;
?>

<div class="br-block">
    <div class="text-center"><img class="icon" src="/images/general-page/kulich.png" alt="Kulich"></div>
    <h2>Лучшие<br> рецепты пасхальных куличей</h2>
    <?php if($recipiesType1):?>
        <div class="container">
            <div class="row">
            <?php foreach ($recipiesType1 as $recipe):?>
                <div class="col-md-6 col-sm-6">
                    <div class="br-block__item">
                        <a href="<?=$recipe->url;?>" class="image" style="background-image:url(<?=$recipe->image;?>)"></a>
                        <div class="text">
                            <h3><a href="<?=$recipe->url;?>"><?=$recipe->title;?></a></h3>
                            <?=$recipe->ingredient;?>
                            <div class="actions">
                                <a class="p-btn btn-rounded btn-red" href="<?=$recipe->url;?>">Как приготовить</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            </div>
        </div>
    <?php endif;?>
</div>
<div class="br-block other-recipies">
    <?=$this->render('_previews');?>
</div>

<?=$this->render('_competition');?>