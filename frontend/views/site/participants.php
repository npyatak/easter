<div class="general-page">
    <div class="first-block">
        <div class="">
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