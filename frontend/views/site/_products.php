<?php if($this->params['products']):?>
<!-- here comes slider -->
<div class="main-slider-wrapper">
    <div class="title">
        Dr. Oetker рекомендует: <br/> 
        Лучшие продукты к Пасхе
    </div>
    <div class="main-slider-nav main-slider">
        <?php foreach ($this->params['products'] as $product):?>
            <div class="main-slider__card">
                <img src="<?=$product->image;?>" alt="<?=$product->title;?>">
                <button><?=$product->typeLabel;?></button>
                <p><?=$product->title;?></p>
            </div>
        <?php endforeach;?>
    </div>
    <a href="http://academy.oetker.ru/range/">Смотреть все</a>
</div>
<!-- /here comes slider -->
<?php endif;?>