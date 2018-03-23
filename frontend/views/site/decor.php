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
                Как украсить дом к Пасхе: лучшие советы
            </h1>
            <p class="text">
                <strong>Для теста:</strong> <br/>
                1 упаковка (7г) Дрожжей Dr. Oetker, 200 мл теплого молока, 550 г муки, 3 яйца, 100 г сливочного масла, 180 г сахара, 1 щепотка соли, 1 упаковка (8г) Ванильного сахара Dr. Oetker, 1 упаковка (10г) Разрыхлителя теста Dr. Oetker. 50 г изюма, 2 ст.л. меда
            </p>
            <p class="text">
                <strong>Время приготовления:</strong> <br/>
                15 минут
            </p>
        </div>
    </div>
    <div class="image-wrapper">
        <div class="slick-slider">
            <div>
                <img src="/images/recepie-page/youtubepreview.png" alt="">
                    <div class="middle__text">
                    <h1 class="subtitle">
                        Красим яйца 1
                    </h1>
                    <p class="text">
                        Хотите окрасить яйца и получить узор на скорлупе? Это совсем не сложно. Отварите яйца вкрутую, остудите и протрите насухо, а затем аккуратно, чтоб не треснула скорлупа, обмотайте резинками для денег или суровой ниткой. После этого разведите в воде пищевой краситель, добавьте 5 ст.л. 9%-го уксуса, чтобы краска лучше держалась и не шла разводами, и опустите яйца в эту жидкость на 2-4 минуты. 
                    </p>
                    <p class="text">
                        Достаете, кладете сушиться на бумажное полотенце, а потом снимаете канцелярскую резинку или нитку – на вашем яйце будут четкие прямые линии цвета натуральной скорлупы. Рисунок в клеточку можно получить, если обмотать яйцо сетчатыми чулками или овощной сеткой. Широкие полосы, кружочки или силуэты получаем, обклеивая яйцо кусочками малярного скотча, фигурными наклейками или пластырем. Хотите получить яйцо в крапинку? Обмакните яйцо в воду, а затем обваляйте в рисе, просе или толченой скорлупе, аккуратно оберните яйцо марлей или капроновым чулком и перевяжите ниткой, а затем опустите в краситель. После того как яйцо окрасится и высохнет, ему можно придать дополнительный блеск, смазав скорлупу растительным маслом.
                    </p>
                </div>
            </div>
            <div>
                <img src="/images/recepie-page/youtubepreview.png" alt="">
                    <div class="middle__text">
                    <h1 class="subtitle">
                        Красим яйца 2
                    </h1>
                    <p class="text">
                        Хотите окрасить яйца и получить узор на скорлупе? Это совсем не сложно. Отварите яйца вкрутую, остудите и протрите насухо, а затем аккуратно, чтоб не треснула скорлупа, обмотайте резинками для денег или суровой ниткой. После этого разведите в воде пищевой краситель, добавьте 5 ст.л. 9%-го уксуса, чтобы краска лучше держалась и не шла разводами, и опустите яйца в эту жидкость на 2-4 минуты. 
                    </p>
                    <p class="text">
                        Достаете, кладете сушиться на бумажное полотенце, а потом снимаете канцелярскую резинку или нитку – на вашем яйце будут четкие прямые линии цвета натуральной скорлупы. Рисунок в клеточку можно получить, если обмотать яйцо сетчатыми чулками или овощной сеткой. Широкие полосы, кружочки или силуэты получаем, обклеивая яйцо кусочками малярного скотча, фигурными наклейками или пластырем. Хотите получить яйцо в крапинку? Обмакните яйцо в воду, а затем обваляйте в рисе, просе или толченой скорлупе, аккуратно оберните яйцо марлей или капроновым чулком и перевяжите ниткой, а затем опустите в краситель. После того как яйцо окрасится и высохнет, ему можно придать дополнительный блеск, смазав скорлупу растительным маслом.
                    </p>
                </div>
            </div>
        </div>
    </div>
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

    <?=$this->render('_products');?>

    <?=$this->render('_other_recipies');?>
</div>