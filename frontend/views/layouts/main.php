<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <header class="header">
        <div class="mobile-hidden">
            <div class="header__brend">
                <div class="header__container">
                    <div class="header__brend__icon"><img src="/frontend/web/images/logo/brend.png" alt="Logo"></div>
                </div>  <!-- end header__container  -->
            </div>  <!-- end header__brend  -->
            <div class="header__top">
                <div class="header__container">
                    <div class="header__logo">
                        <a href="/"><img src="/frontend/web/images/logo/logo.png" alt=""></a>
                    </div>
                    <div class="header__top__right">
                        <a target="_blank" href="http://academy.oetker.ru/recipes/add/?edit=Y" class="header__btn">Добавить рецепт</a>
                        <a target="_blank" href="http://academy.oetker.ru/mk/add/?edit=Y" class="header__btn">Добавить мастер-класс</a>
                    </div>  <!-- end header__top__right  -->
                </div>  <!-- end header__container  -->
            </div>  <!-- end header__top  -->
            <div class="header__middlle hide-mobile">
                <div class="header__container">
                    <form name="arrFilter_form" action="" method="get" class="form header__serach">
                        <input type="hidden" name="set_filter" value="Y">
                        <a target="_blank" href="http://academy.oetker.ru/recipes/?set_filter=Y&q=" class="btn">Найти</a>
                        <div class="header__serach__input">
                            <input type="text" name="q" class="form__controll" placeholder="Поиск по рецептам и ингредиентам">
                            <i class="icon icon_search"></i>
                            <a target="_blank" href="http://academy.oetker.ru/recipes/?set_filter=Y&q=" class="link"></a>
                        </div>
                    </form>
                </div>  <!-- end header__container  -->
            </div>  <!-- end header__middle  -->
            <div class="header__nav">
                <div class="header__container">
                    <!-- main-menu start -->
                    <!-- ================ -->
                    <nav class="main-menu">
                        <ul>
                            <li><a target="_blank" href="http://academy.oetker.ru/recipes/">Рецепты <i class="icon icon_arrow-down15x9"></i></a>
                                <ul>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=4">Блины, оладьи, сырники</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=5">Хлеб</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=10">Пироги, пирожки, пицца</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=15">Булочки</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=20">Запеканки</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=16">Кексы, маффины, капкейки</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=18">Куличи</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=17">Паи, тарты</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=19">Печенье, вафли, пряники</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=12">Торты и пирожные</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=13">Десерты</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=14">Домашние заготовки</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/recipes/?arrFilter_ff[SECTION_ID][]=37">Другое</a></li>
                                </ul>
                            </li>
                            <li><a target="_blank" href="http://academy.oetker.ru/mk/">Мастер-классы <i class="icon icon_arrow-down15x9"></i></a>
                                <ul>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=24&amp;set_filter=Y">Блины, оладьи, сырники</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=25&amp;set_filter=Y">Хлеб</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=26&amp;set_filter=Y">Пироги, пирожки, пицца</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=31&amp;set_filter=Y">Булочки</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=36&amp;set_filter=Y">Запеканки</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=32&amp;set_filter=Y">Кексы, маффины, капкейки</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=34&amp;set_filter=Y">Куличи</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=33&amp;set_filter=Y">Паи, тарты</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=35&amp;set_filter=Y">Печенье, вафли, пряники</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=28&amp;set_filter=Y">Торты и пирожные</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=29&amp;set_filter=Y">Десерты</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=30&amp;set_filter=Y">Домашние заготовки</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/mk/?arrFilter_ff[SECTION_ID][]=38&amp;set_filter=Y">Другое</a></li>
                                </ul>
                            </li>
                            <li><a target="_blank" href="http://academy.oetker.ru/hitrosti/">Советы</a></li>
                            <li><a target="_blank" href="http://academy.oetker.ru/contest/">Конкурсы</a></li>
                            <li><a target="_blank" href="http://academy.oetker.ru/news/">Новости</a></li>
                            <li><a target="_blank" href="http://academy.oetker.ru/range/">Ассортимент</a></li>
                            <li class="selected"><a href="http://academy.oetker.ru/recipes/2724/" target="_blank">Случайный рецепт</a></li>
                            <li>
                                <a href="#">Еще <i class="icon icon_arrow-down15x9"></i></a>
                                <ul>
                                    <li><a target="_blank" href="http://academy.oetker.ru/battle-of-recipes/">Битвы рецептов</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/rating/">Рейтинг</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/gift-shop/">Магазин подарков</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/qa/">Вопросы и ответы</a></li>
                                    <li><a target="_blank" href="http://academy.oetker.ru/help/">Справка</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>  <!-- end header__nav  -->
        </div>
        <div class="ipad-up-hidden">
            <div class="header__brend">
                <div class="header__container">
                    <div class="header__brend__icon">
                        <img src="/frontend/web/images/logo/brend.png" alt="Logo">
                    </div>
                </div>  <!-- end header__container  -->
            </div>  <!-- end header__brend  -->
            <div class="header__top">
                <div class="header__container">
                    <div class="header__logo">
                        <a href="/"><img src="/frontend/web/images/logo/logo.png" alt=""></a>
                    </div>
                    <div class="action-icon">
                        <i class="fa fa-bars"></i>
                        <i class="fa fa-times" style="display: none;"></i>
                    </div>
                </div>  <!-- end header__container  -->
            </div>  <!-- end header__top  -->
            <div class="header__nav">
                <div class="header__container">
                    <!-- main-menu start -->
                    <!-- ================ -->
                    <nav id="menu-list" class="main-menu">
                        <ul>
                            <li><a class="main-menu__btn" target="_blank" href="http://academy.oetker.ru/recipes/">Рецепты</a>
                            </li>
                            <li><a target="_blank" href="http://academy.oetker.ru/mk/">Мастер-классы</a>
                            </li>
                            <li><a class="main-menu__btn" target="_blank" href="http://academy.oetker.ru/recipes/add/?edit=Y">Добавить рецепт</a>
                            </li>
                            <li><a target="_blank" href="http://academy.oetker.ru/hitrosti/">Советы</a></li>
                            <li><a class="main-menu__btn" href="http://academy.oetker.ru/battle-of-recipes/" target="_blank">Битвы рецептов</a></li>
                            <li><a target="_blank" href="http://academy.oetker.ru/contest/">Конкурсы</a></li>
                            <li><a target="_blank" href="http://academy.oetker.ru/news/">Новости</a></li>
                            <li><a target="_blank" href="http://academy.oetker.ru/range/">Ассортимент</a></li>
                            <li><a class="main-menu__btn" href="http://academy.oetker.ru/recipes/2724/" target="_blank">Случайный рецепт</a></li>
                        </ul>
                    </nav>
                </div>
            </div>  <!-- end header__nav  -->
        </div>
    </header>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>
    <div id="content">
        <?= $content ?>
    </div>
</div>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116429672-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-116429672-1');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48218354 = new Ya.Metrika({
                    id:48218354,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48218354" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
