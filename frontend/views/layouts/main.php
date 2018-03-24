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

                    <div class="header-account">
                        <a href="#" data-popup="#poup-exit" class="header-account__exit"><i class="icon icon_user"></i> <span>Личный кабинет</span></a>
                    </div>
                    <a href="" class="header__btn">Добавить рецепт</a>
                    <a href="" class="header__btn">Добавить мастер-класс</a>
                </div>  <!-- end header__top__right  -->
            </div>  <!-- end header__container  -->
        </div>  <!-- end header__top  -->
        <div class="header__middlle">
            <div class="header__container">
                <form name="arrFilter_form" action="" method="get" class="form header__serach">
                    <input type="hidden" name="set_filter" value="Y">
                    <button class="btn" type="submit">Найти</button>
                    <div class="header__serach__input">
                        <input type="text" name="q" class="form__controll" placeholder="Поиск по рецептам и ингредиентам">
                        <i class="icon icon_search"></i>
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
                        <li><a href="/recipes/">Рецепты <i class="icon icon_arrow-down15x9"></i></a>
                            <ul>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=4">Блины, оладьи, сырники</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=5">Хлеб</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=10">Пироги, пирожки, пицца</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=15">Булочки</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=20">Запеканки</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=16">Кексы, маффины, капкейки</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=18">Куличи</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=17">Паи, тарты</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=19">Печенье, вафли, пряники</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=12">Торты и пирожные</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=13">Десерты</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=14">Домашние заготовки</a></li>
                                <li><a href="/recipes/?arrFilter_ff[SECTION_ID][]=37">Другое</a></li>
                            </ul>
                        </li>
                        <li><a href="/mk/">Мастер-классы <i class="icon icon_arrow-down15x9"></i></a>
                            <ul>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=24&amp;set_filter=Y">Блины, оладьи, сырники</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=25&amp;set_filter=Y">Хлеб</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=26&amp;set_filter=Y">Пироги, пирожки, пицца</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=31&amp;set_filter=Y">Булочки</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=36&amp;set_filter=Y">Запеканки</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=32&amp;set_filter=Y">Кексы, маффины, капкейки</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=34&amp;set_filter=Y">Куличи</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=33&amp;set_filter=Y">Паи, тарты</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=35&amp;set_filter=Y">Печенье, вафли, пряники</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=28&amp;set_filter=Y">Торты и пирожные</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=29&amp;set_filter=Y">Десерты</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=30&amp;set_filter=Y">Домашние заготовки</a></li>
                                <li><a href="/mk/?arrFilter_ff[SECTION_ID][]=38&amp;set_filter=Y">Другое</a></li>
                            </ul>
                        </li>
                        <li><a href="/hitrosti/">Советы</a></li>
                        <li><a href="/contest/">Конкурсы</a></li>
                        <li><a href="/news/">Новости</a></li>
                        <li><a href="/range/">Ассортимент</a></li>
                        <li class="selected"><a href="/recipes/2724/" target="_blank">Случайный рецепт</a></li>
                        <li>
                            <a href="#">Еще <i class="icon icon_arrow-down15x9"></i></a>
                            <ul>
                                <li><a href="/battle-of-recipes/">Битвы рецептов</a></li>
                                <li><a href="/rating/">Рейтинг</a></li>
                                <li><a href="/gift-shop/">Магазин подарков</a></li>
                                <li><a href="/qa/">Вопросы и ответы</a></li>
                                <li><a href="/help/">Справка</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>  <!-- end header__nav  -->
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

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
