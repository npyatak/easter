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

    <?=$this->render('_competition');?>

    <?=$this->render('_products');?>

    <?=$this->render('_previews');?>
    
</div>
