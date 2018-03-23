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
                    <a class="simple-link text-white" href="">Смотреть все</a>
                </div>
                <?php if($recipies):?>
                    <div class="contest-items clearfix">
                        <?php foreach ($recipies as $recipe):?>
                            <div class="contest-item">
                                <a href="<?=$recipe->url;?>" class="image">
                                    <img src="<?=$recipe->image;?>" alt="<?=$recipe->title;?>">
                                </a>
                                <div class="text">
                                    <h3><a href=""><?=$recipe->title;?></a></h3>
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
                <div class="text-center"><img class="icon" src="/frontend/web/images/general-page/kulich-2.png" alt="Kulich"></div>
                <h2>Другие рецепты к пасхе</h2>
                <div class="text-center">
                    <a class="simple-link text-white" href="">Смотреть все</a>
                </div>
                <div class="contest-items clearfix">
                    <div class="contest-item">
                        <a href="" class="image">
                            <img src="/frontend/web/images/general-page/pasha-3.jpg" alt="Сладкие пасхальные яица">
                        </a>
                        <div class="text">
                            <h3><a href="">Сладкие пасхальные яица</a></h3>
                            <p>Для теста:</p>
                            <p>1 упаковка (7г) Дрожжей Dr. Oetker, 200 мл теплого молока, 550 г муки, 3 яйца, 100 г сливочного масла, 180 г сахара, 1 щепотка соли, 1 упаковка (8г) Ванильного сахара Dr. Oetker, 1 упаковка (10г) Разрыхлителя теста Dr. Oetker. 50 г изюма, 2 ст.л. меда</p>
                            <div class="actions">
                                <a class="p-btn btn-rounded btn-red" href="">Как приготовить</a>
                                <a class="simple-link" href="">Смотреть все</a>
                            </div>
                        </div>
                    </div>
                    <div class="contest-item">
                        <a href="" class="image">
                            <img src="/frontend/web/images/general-page/pasha-4.jpg" alt="Ромовая баба">
                        </a>
                        <div class="text">
                            <h3><a href="">Ромовая баба</a></h3>
                            <p>Для теста:</p>
                            <p>1 упаковка (7г) Дрожжей Dr. Oetker, 200 мл теплого молока, 550 г муки, 3 яйца, 100 г сливочного масла, 180 г сахара, 1 щепотка соли, 1 упаковка (8г) Ванильного сахара Dr. Oetker, 1 упаковка (10г) Разрыхлителя теста Dr. Oetker. 50 г изюма, 2 ст.л. меда</p>
                            <div class="actions">
                                <a class="p-btn btn-rounded btn-red" href="">Как приготовить</a>
                                <a class="simple-link" href="">Смотреть все</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="g-container">
                <div class="text-center"><img class="icon" src="/frontend/web/images/general-page/kulich-3.png" alt="Kulich"></div>
                <h2>Украшаем дом к пасхе</h2>
                <div class="decorate">
                    <div class="item">
                        <div class="flex-box">
                            <div class="left">
                                <h4>Красим яйца</h4>
                                <div class="text">
                                    <p>Самый яркий и узнаваемый пасхальный символ – крашеные яйца. Они могут быть как настоящими, куриными или перепелиными, так и искусственными – выточенными из дерева или отлитыми из пластика и других материалов.</p>
                                    <p>Если вы имеете дело с натуральными яйцами и хотите сохранить их съедобные свойства, то воспользуйтесь пищевыми красителями.</p>
                                </div>
                                <a class="p-btn btn-rounded btn-red" href="">Читать</a>
                            </div>
                            <div class="right" style="background-image:url('/frontend/web/images/general-page/pozdravleniya-s-pashoy-2017-korotkie-6.png')"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="flex-box">
                            <div class="left">
                                <h4>Красим яйца</h4>
                                <div class="text">
                                    <p>Самый яркий и узнаваемый пасхальный символ – крашеные яйца. Они могут быть как настоящими, куриными или перепелиными, так и искусственными – выточенными из дерева или отлитыми из пластика и других материалов.</p>
                                    <p>Если вы имеете дело с натуральными яйцами и хотите сохранить их съедобные свойства, то воспользуйтесь пищевыми красителями.</p>
                                </div>
                                <a class="p-btn btn-rounded btn-red" href="">Читать</a>
                            </div>
                            <div class="right" style="background-image:url('/frontend/web/images/general-page/pozdravleniya-s-pashoy-2017-korotkie-6.png')"></div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a class="simple-link" href="">Смотреть все</a>
                </div>
            </div>
        </div>
    </div>
</div>