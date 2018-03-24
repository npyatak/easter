<div class="rcp-page">
    <div class="header custom-header">
        <div class="header__text">
            <h1 class="title">
                Пасха с <br/>
                Dr. Oetker
            </h1>
            <h1 class="subtitle">
                <?=$recipe->title;?>
            </h1>
            <p class="text">
                <?=$recipe->ingredient;?>
            </p>
            <p class="text">
                <strong>Время приготовления:</strong> <br/>
                <?=$recipe->cooking_time;?>
            </p>
        </div>
    </div>
    <div class="image-wrapper">
        <img src="<?=$recipe->image;?>" alt="">
    </div>
    <div class="middle">
        <div class="middle__text">
            <h1 class="subtitle">
                Способ приготовления
            </h1>
            <p class="text"> <?=$recipe->instruction;?> </p>
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

    <?=$this->render('_products');?>

    <?=$this->render('_previews');?>
</div>
