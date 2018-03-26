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
            <!-- <p class="text">
                <strong>Время приготовления:</strong> <br/>
                <?=$recipe->cooking_time;?>
            </p> -->
        </div>
    </div>
    <div class="image-wrapper">
        <?php if($recipe->video):?>
            <iframe id="challengeVideo" 
                class="video"
                src="http://www.youtube.com/embed/M7lc1UVf-VE"
                frameborder="0" 
                allowfullscreen
                width=940
                height=600
                >
            </iframe>
        <?php else:?>
            <img src="<?=$recipe->image;?>" alt="">
        <?php endif;?>
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
