<?php
use yii\helpers\Url;
?>
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
<div class="rcp-page decoration-page">
    <div class="header">
        <div class="header__text">
            <h1 class="title">
                Пасха с <br/>
                Dr. Oetker
            </h1>
            <h1 class="subtitle">
                Как украсить дом к Пасхе: лучшие <br/> советы
            </h1>
        </div>
    </div>
    <?php if($advices):?>
        <div class="image-wrapper image-wrapper-custom">
            <div class="slider-slick">
                <?php foreach ($advices as $key => $advice):?>
                    <div data-key=<?=$key+1;?>>
                        <img src="<?=$advice->image;?>" alt="<?=$advice->title;?>">
                    </div>
                <?php endforeach;?>
            </div>
            <div class="slider-slick-for">
                <?php foreach ($advices as $key => $advice):?>
                    <div data-key=<?=$key+1;?>>
                        <div class="middle__text">
                            <h1 class="subtitle"><?=$advice->title;?></h1>
                            <p class="text"><?=$advice->text;?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    <?php endif;?>

    <?=$this->render('_competition');?>

    <?=$this->render('_products');?>

    <?=$this->render('_previews');?>
</div>

<?php $initial = $id ? $id - 1 : 0;?>
<?php $script = "
    $('.slider-slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        initialSlide: ".$initial.",
        arrows: true,
        fade: true,
        dots: true,
        asNavFor: '.slider-slick-for',
        dotsClass: 'custom-pagination',
        customPaging: function (slider, i) {
            return (i + 1);
        },
        nextArrow: '<div class=\"slider-nav-right slider-nav-right-white\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></div>',
        prevArrow: '<div class=\"slider-nav-left slider-nav-left-white\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></div>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    arrows: false
                }
            }
        ]
    });
    $('.slider-slick-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        initialSlide: ".$initial.",
        arrows: false,
        fade: false,
        dots: false,
        asNavFor: '.slider-slick',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    arrows: false
                }
            }
        ]
    });

    $('.slider-slick').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        nextId = $('.slick-slide[data-slick-index='+nextSlide+']').data('key');
        window.history.pushState(null, '', '".Url::toRoute(['site/decor'])."/'+nextId);
    });
";

$this->registerJs($script, yii\web\View::POS_END);