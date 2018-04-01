<div class="menu-buttons__block">
    <a href="/" class="btn-to-main">
        На главную
    </a>
    <div class="social">
        <p class="text hide-mobile">Мы в соцсетях</p>
        <a href="https://ok.ru/dr.oetker" target="_blank">
            <i class="fa fa-odnoklassniki"></i>
        </a>
        <a href="https://www.instagram.com/dr.oetker_russia/" target="_blank">
            <i class="fa fa-instagram"></i>
        </a>
        <a href="https://vk.com/dr_oetker" target="_blank">
            <i class="fa fa-vk"></i>
        </a>
    </div>
</div>
<div class="general-page">
    <div class="first-block">
        <div class="">
            <div class="inner">
                <h1>Пасха с Dr. Oetker</h1>
                <h2>Раз в год в наши дома приходит Пасха.</h2>
                <p>А с ней чудесные ароматы выпечки, ванили, корицы. <br>В доме по-особенному светло и хорошо!</p>
                <div class="text-center">
                    <span class="participants-arrow"><span class="fa fa-angle-down"></span></span>
                </div>
            </div>
        </div>
    </div>
</div>
    <?=$this->render('_products');?>
<div class="participants">
    <h1 class="block__title">
        Участники
    </h1>
    <?php if($posts):?>
        <div class="container">
            <div class="row">
                <?php foreach ($posts as $post):?>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="participants__block">
                            <img src="<?=$post->thumbUrl;?>" alt="">
                            <div class="text">
                                <!-- <h2 class="name"><?=$post->ig_user_id;?></h2> -->
                                <!-- <p class="comment">
                                    Комментарий в две строчки примерно
                                </p> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    <?php endif;?>
    <div class="action__block">
        <button class="p-btn btn-rounded">
            Загрузить еще
        </button>
    </div>
</div>