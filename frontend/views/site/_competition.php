<?php
use yii\helpers\Url;
?>

<div class="competition">
    <img class="left-1" src="/images/recepie-page/ing-left-1.png" alt="">
    <img class="left-2" src="/images/recepie-page/ing-left-2.png" alt="">
    <img class="left-3" src="/images/recepie-page/ing-left-3.png" alt="">
    <img class="right-1" src="/images/recepie-page/ing-right-1.png" alt="">
    <img class="right-2" src="/images/recepie-page/ing-right-2.png" alt="">
    <img class="right-3" src="/images/recepie-page/ing-right-3.png" alt="">
    <div class="competition__wrapper">
        <h1 class="title">
            Конкурс!
        </h1>
        <div class="competition__text">
            <h2 class="subtitle">
                Академия Dr. Oetker объявляет конкурс <br/>
                на самый красивый пасхальный кулич.  
            </h2>
            <p class="text">
                Готовь куличи, публикуй фотографии под хештегом 
            </p>
            <h2 class="subtitle">
                #DrOetker_Пасха
            </h2>
            <p class="text">
                в своем аккаунте Instagram. Авторы лучших, по мнению жюри, <br/>
                15 работ получат  пасхальные наборы Dr. Oetker
            </p>
            <a href="<?=Url::toRoute(['site/rules']);?>" class="link special-link">
                Полные правила
            </a>
            <a href="<?=Url::toRoute(['site/participants']);?>" class="link">
                Все участники
            </a>
        </div>
    </div>
</div>