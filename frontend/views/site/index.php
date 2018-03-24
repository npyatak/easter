<?php
use yii\helpers\Url;
?>

<div class="general-page">
    <div class="first-block">
        <div class="g-container">
            <div class="inner">
                <h1>Пасха с Dr. Oetker</h1>
                <h2>Раз в год в наши дома приходит Пасха.</h2>
                <p>А с ней чудесные ароматы выпечки, ванили, корицы. <br>В доме по-особенному светло и хорошо!</p>
                <div class="text-center">
                    <span class="go-to-second-screen"><span class="fa fa-angle-down"></span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="second-block">
        <div class="top">
            <div class="g-container">
                <div class="text-center"><img class="icon" src="/images/general-page/kulich.png" alt="Kulich"></div>
                <h2>Лучшие<br> рецепты пасхальных куличей</h2>
                <div class="text-center">
                    <a class="simple-link text-white" href="<?=Url::toRoute(['site/eastercake']);?>">Смотреть все</a>
                </div>
                <?php if($recipiesType1):?>
                    <div class="contest-items clearfix">
                        <?php foreach ($recipiesType1 as $recipe):?>
                            <div class="contest-item">
                                <a href="<?=$recipe->url;?>" class="image">
                                    <img src="<?=$recipe->image;?>" alt="<?=$recipe->title;?>">
                                </a>
                                <div class="text">
                                    <h3><a href="<?=$recipe->url;?>"><?=$recipe->title;?></a></h3>
                                    <?=$recipe->ingredient;?>
                                    <div class="actions">
                                        <a class="p-btn btn-rounded btn-red" href="<?=$recipe->url;?>">Как приготовить</a>
                                        <a class="simple-link" href="<?=Url::toRoute(['site/eastercake']);?>">Смотреть все</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
        <div class="bottom">
            <div class="left"></div>
            <div class="right"></div>
            <div class="g-container">
                <h2><span>Конкурс</span></h2>
                <h3>Академия Dr. Oetker объявляет конкурс на самый красивый пасхальный кулич.</h3>
                <p>Готовь куличи, публикуй фотографии под хештегом</p>
                <div class="hash-tag">#DrOetker_Пасха</div>
                <p>в своем аккаунте Instagram. Авторы лучших, по мнению жюри, 15 работ получат  пасхальные наборы Dr. Oetker</p>
                <div class="actions">
                    <a href="<?=Url::toRoute(['site/rules']);?>">Полные правила</a>
                    <a href="<?=Url::toRoute(['site/participants']);?>">Все участники</a>
                </div>
            </div>
        </div>
    </div>

    <?=$this->render('_products');?>

    <div class="fourth-block">
        <div class="top">
            <div class="g-container">
                <div class="text-center"><img class="icon" src="/images/general-page/kulich-2.png" alt="Kulich"></div>
                <h2>Другие рецепты к пасхе</h2>
                <div class="text-center">
                    <a class="simple-link text-white" href="<?=Url::toRoute(['site/recepies']);?>">Смотреть все</a>
                </div>
                <?php if($recipiesType2):?>
                    <div class="contest-items clearfix">
                        <?php foreach ($recipiesType2 as $recipe):?>
                            <div class="contest-item">
                                <a href="<?=$recipe->url;?>" class="image">
                                    <img src="<?=$recipe->image;?>" alt="<?=$recipe->title;?>">
                                </a>
                                <div class="text">
                                    <h3><a href="<?=$recipe->url;?>"><?=$recipe->title;?></a></h3>
                                    <?=$recipe->ingredient;?>
                                    <div class="actions">
                                        <a class="p-btn btn-rounded btn-red" href="<?=$recipe->url;?>">Как приготовить</a>
                                        <a class="simple-link" href="<?=Url::toRoute(['site/recipies']);?>">Смотреть все</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
        </div>

        <?php if($advices):?>
        <div class="bottom">
            <div class="g-container">
                <div class="text-center"><img class="icon" src="/images/general-page/kulich-3.png" alt="Kulich"></div>
                <h2>Украшаем дом к пасхе</h2>
                <div class="decorate">
                    <?php foreach ($advices as $advice):?>
                        <div class="item">
                            <div class="flex-box">
                                <div class="left">
                                    <h4><?=$advice->title;?></h4>
                                    <div class="text"><?=$advice->preview;?></div>
                                    <a class="p-btn btn-rounded btn-red" href="<?=Url::toRoute(['site/decor']);?>">Читать</a>
                                </div>
                                <div class="right" style="background-image:url(<?=$advice->preview_image;?>)"></div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="text-center">
                    <a class="simple-link" href="<?=Url::toRoute(['site/decor']);?>">Смотреть все</a>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
</div>