<link href="/css/bootstrap.css" rel="stylesheet">
<style>
    .rcp-page {
        display: block;
        position: relative;
    }
    .rcp-page .header {
        height: 840px;
        background: url('../images/recepie-page/flowers.png') no-repeat center;
        -webkit-background-size: cover;
        background-size: cover;
        display: flex;
        justify-content: center;
    }
    .header .header__text {
        position: absolute;
        top: 60px;
        width: 940px;
        text-align: center;
        text-align: -webkit-center;
    }
    .header__text .title {
        text-align: center;
        text-align: -webkit-center;
        color: #e9291d;
        font-family: 'PT-Serif-Bold';
        font-weight: 400;
        margin: 0 0 50px 0;
        font-size: 45px;
    }
    .header__text .subtitle {
        text-align: center;
        text-align: -webkit-center;
        color: #000;
        font-size: 48px;
        font-family: 'PT-Serif-Bold';
        font-weight: 400;
        margin: 0 0 30px 0;
    }
    .header__text .text {
        text-align: center;
        text-align: -webkit-center;
        line-height: 25px;
        font-size: 16px;
        margin-bottom: 30px;
        font-family: 'PT-Serif-Regular';
    }
    .image-wrapper {
        width: 940px;
        position: relative;
        left: 0;
        right: 0;
        margin: 0 auto;
        margin-top: -300px;
    }
    .image-wrapper img {
        width: 100%;
    }
    /* middle part */
    .rcp-page .middle {
        position: relative;
        text-align: center;
        text-align: -webkit-center;
        padding-top: 100px;
    }
    .rcp-page .middle .middle__text {
        position: relative;
        width: 940px;
        text-align: center;
        text-align: -webkit-center;
        margin: 0 auto;
    }
    .middle__text .title {
        text-align: center;
        text-align: -webkit-center;
        color: #e9291d;
        font-family: 'PT-Serif-Bold';
        font-weight: 400;
        margin: 0 0 50px 0;
        font-size: 45px;
    }
    .middle__text .subtitle {
        text-align: center;
        text-align: -webkit-center;
        color: #000;
        font-size: 48px;
        font-family: 'PT-Serif-Bold';
        font-weight: 400;
        margin-bottom: 30px;
    }
    .middle__text .text {
        text-align: center;
        text-align: -webkit-center;
        line-height: 25px;
        font-size: 16px;
        margin-bottom: 30px;
        font-family: 'PT-Serif-Regular';
    }
    .middle__text .text-number {
        text-align: center;
        text-align: -webkit-center;
        line-height: 25px;
        font-size: 16px;
        margin-bottom: 10px;
        font-family: 'PT-Serif-Bold';
        font-weight: 800;
    }
    .middle__text .text-number:last-child {
        margin-bottom: 100px;
    }
/* competition-block */
    .competition {
        height: 700px;
        background: #ccdc95;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 120px;
        position: relative;
    }
    .competition__wrapper {
        position: relative;
        width: 100%;
        text-align: center;
        text-align: -webkit-center;
        margin: 0 auto;
        border: 2px solid #aebc7f;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .competition__wrapper .title {
        text-align: -webkit-center;
        font-size: 48px;
        font-family: 'PT-Serif-BoldItalic';
        font-style: italic;
        font-weight: 400;
        margin-bottom: 30px;
        color: #fff;
        position: absolute;
        top: -45px;
        background: #ccdc95;
        padding: 0 100px;
    }
    .link {
        padding: 0 0 1px 0;
        border-bottom: 1px solid #337ab7;
    }
    .competition__text {
        position: relative;
        width: 700px;
        text-align: center;
        text-align: -webkit-center;
        margin: 0 auto;
    }
    .competition__text .subtitle {
        text-align: center;
        text-align: -webkit-center;
        color: #000;
        font-size: 36px;
        font-family: 'PT-Serif-Regular';
        font-weight: 400;
        margin-bottom: 30px;
    }
    .competition__text .text {
        text-align: center;
        text-align: -webkit-center;
        line-height: 25px;
        font-size: 16px;
        margin-bottom: 30px;
        font-family: 'PT-Serif-Regular';
    }
    .competition img {
        position: absolute;
        z-index: 2;
        width: 250px;
    }
    .competition .left-1 {
        top: 0;
        left: 0;
    }
    .competition .left-2 {
        top: 200px;
        left: 0;
    }
    .competition .left-3 {
        bottom: 0;
        left: 0;
    }
    .competition .right-1 {
        top: 0;
        right: 0;
    }
    .competition .right-2 {
        top: 200px;
        right: 0;
    }
    .competition .right-3 {
        bottom: 0;
        right: 0;
    }
    .special-link {
        margin-right: 60px;
    }
/* bottom-block */
    .rcp-page .bottom {
        height: auto;
        background: url(../images/recepie-page/bg-1.png) no-repeat center;
        -webkit-background-size: cover;
        background-size: cover;
        position: relative;
        padding: 50px 0;
    }
    .bottom .top__part {
        width: 940px;
        left: 0;
        right: 0;
        margin: 0 auto;
        text-align: center;
        text-align: -webkit-center;
        margin-bottom: 50px;
    }
    .bottom .top__part .cupcake-icon {
        width: 55px;
        height: 47px;
    }
    .bottom .top__part .title {
        text-align: -webkit-center;
        font-size: 48px;
        font-family: 'PT-Serif-BoldItalic';
        font-style: italic;
        font-weight: 400;
        margin-bottom: 15px;
        color: #fff;
    }
    .card {
        height: auto;
        background: #fff;
        margin-bottom: 60px;
        display: block;
        position: relative;
    }
    .card img {
        width: 100%;
    }
    .card .text {
        padding: 15px;
        display: block;
        height: 140px;
        z-index: 2;
        background: #fff;
    }
    .text-tilted {
        height: 10px;
        position: absolute;
        background: rgba(255, 255, 255, 0.59);
        width: calc(100% - 3px);
        bottom: -5px;
        left: 3px;
        transform: rotate(-1deg);
        z-index: 0;
        border-bottom: 1px solid #ccc3c3;
    }
    .card a {
        position: absolute;
        bottom: 15px;
        left: 15px;
    }
    .card .text .title {
        text-align: left;
        text-align: -webkit-left;
        color: #000;
        font-size: 21px;
        font-family: 'PT-Serif-Regular';
        font-weight: 400;
        margin-bottom: 30px;
        margin-top: 0;
    }
    @media screen and (min-width: 1200px) {
        .hide-desktop {
            display: none;
        }
        .hide-mobile {
            display: block;
        }
    }
    @media screen and (max-width: 1199px) {
        .hide-desktop {
            display: block;
        }
        .hide-mobile {
            display: none;
        }
    }
    @media screen and (min-width: 768px) and (max-width: 1199px) {
        .rcp-page .header {
            background-position: right;
        }
        .middle .middle__text {
            width:  100%;
            padding: 40px;
        }
        .rcp-page .middle .middle__text {
            width: 100%;
        }
        .header .header__text {
            width:  100%;
            padding: 40px;
        }
        .image-wrapper {
            width: 100%;
        }
        .rcp-page .middle {
            padding-top: 0px;
        }
        .rcp-page .competition {
            padding: 80px;
            height: 500px;
        }
        .competition__text .subtitle {
            margin: 0 0 10px 0;
            font-size:  28px;
        }
        .competition__text .text {
            font-size:  14px;
            line-height: 22px;
        }
        .competition__wrapper .title {
            font-size: 36px;
            padding: 0 20px;
        }
        .competition img {
            width: 150px;
        }
        .competition .left-2 {
            top: 150px;
        }
        .competition .right-2 {
            top: 150px;
        }
        .special-link {
            margin-right: 60px;
        }
        .middle__text .text-number:last-child {
            margin-bottom: 20px;
        }
    }
    @media screen and (min-width: 320px) and (max-width: 767px) {
        .rcp-page .header {
            background-position: left;
            height: auto;
        }
        .header__text .title {
            margin-bottom: 30px;
            font-size: 38px;
        }
        .header__text .subtitle {
            font-size: 32px;
            margin-bottom: 10px;
        }
        .header__text .text {
            font-size: 14px;
            line-height: 20px;
        }
        .middle .middle__text {
            width:  100%;
            padding: 20px;
        }
        .header .header__text {
            width: 100%;
            padding: 20px;
            position: relative;
            top: inherit;
            height: auto;
        }
        .rcp-page .middle .middle__text {
            width: 100%;
        }
        .image-wrapper {
            width: 100%;
            margin-top: 0;
        }
        .rcp-page .middle {
            padding-top: 0px;
        }
        .middle__text .subtitle {
            margin: 10px 0 5px 0;
            font-size: 32px;
        }
        .middle__text .text {
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 15px;
        }
        .middle__text .text-number:last-child {
            margin-bottom: 20px;
        }
        .rcp-page .competition {
            padding: 40px 20px;
            height: auto;
        }
        .competition__text {
            padding: 20px 5px;
        }
        .competition__text .subtitle {
            margin: 0 0 10px 0;
            font-size:  25px;
        }
        .competition__text .text {
            font-size:  14px;
            line-height: 20px;
        }
        .competition__wrapper .title {
            font-size: 30px;
            padding: 0 20px;
            top: -40px;
        }
        .competition img {
            display: none;
        }
        .special-link {
            margin-right: 30px;
        }
    }
</style>

<div class="rcp-page">
    <div class="header">
        <div class="header__text">
            <h1 class="title">
                Пасха с <br/>
                Dr. Oetker
            </h1>
            <h1 class="subtitle">
                Кулич творожный с изюминкой
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
        <img src="/images/recepie-page/youtubepreview.png" alt="">
    </div>
    <div class="middle">
        <div class="middle__text">
            <h1 class="subtitle">
                Способ приготовления
            </h1>
            <p class="text-number">
                1
            </p>
            <p class="text">
                Смешайте 1 стакан теплой воды и сахар. В другой миске смешайте полстакана муки и сухие дрожжи. Понемногу добавляйте муку в воду, перемешивая каждый раз до однородности. Затяните миску пищевой пленкой и поставьте в теплое место на 1 час.
            </p>
            <p class="text-number">
                2
            </p>
            <p class="text">
                Подкатайте тесто, положите в миску, прикройте пленкой и уберите в теплое место для подъема. Дайте тесту постоять 1 ч., после чего обомните его. Поставьте тесто подходить еще на 1 час.
            </p>
            <p class="text-number">
                3
            </p>
            <p class="text">
                Смешайте 1 стакан теплой воды и сахар. В другой миске смешайте полстакана муки и сухие дрожжи. Понемногу добавляйте муку в воду, перемешивая каждый раз до однородности. Затяните миску пищевой пленкой и поставьте в теплое место на 1 час.
            </p>
            <p class="text-number">
                4
            </p>
            <p class="text">
                Разогрейте в небольшом казане или фритюрнице растительное масло. Обжаривайте в нем баурсаки партиями по несколько штук до насыщенно коричневого цвета. При обжаривании непрерывно помешивайте шумовкой, чтобы они обжаривались со всех сторон равномерно. Готовые баурсаки складывайте в сито или дуршлаг.
            </p>
            <p class="text-number">
                Готово!
            </p>
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
                <a href="#" class="link special-link">
                    Полные правила
                </a>
                <a href="#" class="link">
                    Все участники
                </a>
            </div>
        </div>
    </div>
    <!-- here comes slider -->

    <!-- /here comes slider -->
    <div class="bottom">
        <div class="top__part">
            <img class="cupcake-icon" src="/images/icons/cupcake.png" alt="">
            <h1 class="title">
                Другие рецепты куличей
            </h1>
            <a href="#" class="link">
                Смортеть все
            </a>
        </div>
        <div class="cards-wrapper">
            <div class="row">
                <div class="container">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="text-tilted"></div>
                            <img src="/images/recepie-page/temp.png" alt="">
                            <div class="text">
                                <h1 class="title">
                                    Сладкие пасхальные яйца
                                </h1>
                                <a href="" class="link">
                                    Читать
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="text-tilted"></div>
                            <img src="/images/recepie-page/temp.png" alt="">
                            <div class="text">
                                <h1 class="title">
                                    Сладкие пасхальные яйца
                                </h1>
                                <a href="" class="link">
                                    Читать
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
