<?php
use yii\helpers\Url;
?>

<div class="rcp-page decoration-page">
    <div class="header">
        <div class="header__text">
            <h1 class="title">
                Пасха с <br/>
                Dr. Oetker
            </h1>
            <h1 class="subtitle">
                Как украсить дом к Пасхе: лучшие <br/> советы
            </h1>
        </div>
    </div>
    <?php if($advices):?>
        <div class="image-wrapper image-wrapper-custom">
            <div class="slider-slick">
                <?php foreach ($advices as $advice):?>
                    <div>
                        <img src="<?=$advice->image;?>" alt="<?=$advice->title;?>">
                    </div>
                <?php endforeach;?>
            </div>
            <div class="slider-slick-for">
                <?php foreach ($advices as $advice):?>
                    <div>
                        <div class="middle__text">
                            <h1 class="subtitle"><?=$advice->title;?></h1>
                            <p class="text"><?=$advice->text;?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    <?php endif;?>

    <?=$this->render('_competition');?>

    <?=$this->render('_products');?>

    <?=$this->render('_previews');?>
</div>
