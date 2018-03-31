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
            <h2 class="subtitle" style="margin-bottom: 15px;">
                Академия Dr. Oetker объявляет конкурс <br/>
                на самый красивый пасхальный кулич.  
            </h2>
            <p class="text" style="margin-bottom: 5px;">
                <strong>1.</strong> Готовь куличи 
            </p>
            <p class="text" style="margin-bottom: 0px;">
                <strong>2.</strong> Публикуй фотографии под хештегом
            </p>
            <h2 class="subtitle" style="margin: 15px 0;">
                #DrOetker_Пасха
            </h2>
            <p class="text" style="margin-bottom: 5px;">
                в своем аккаунте Instagram.
            </p>
            <p class="text" style="margin-bottom: 15px;">
                <strong>3.</strong> Авторы лучших, по мнению жюри, <br/>
                15 работ получат  пасхальные наборы Dr. Oetker
            </p>
            <a href="/uploads/rules_03.27.pdf" target="_blank" class="link special-link">
                Полные правила
            </a>
            <a href="<?=Url::toRoute(['site/participants']);?>" class="link">
                Все участники
            </a>
        </div>
    </div>
</div>