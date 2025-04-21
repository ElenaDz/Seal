<?php
use APP\Entity\Product;

/** @var Product[] $products */

?>
<div id="carouselExampleCaptions" class="carousel slide shadow mb-5 bg-white rounded " data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>

    <div class="carousel-inner">
        <?php foreach ($products as $index => $product):  ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '';?>">
            <img src="/assets/img/carousel/background/washed_out/<?= $product->getId() ?>.jpg" class="d-block w-100" alt="<?= $product->getId() ?>">
            <div class="carousel-caption d-md-block">
                <div class="carousel_seal_inner">
                    <a href="<?= \APP\Action\PageProduct::getUrl($product->getId()) ?>">
                        <img src="<?= $product->getCoverUrl()?>" class="carousel_seal" alt="фото продукта <?= $product->getTitle() ?>">
                        <h2 class=""><?= $product->getTitle() ?></h2>
                    </a>
                    <button type="button" class="btn  btn_base"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@fat">
                        Заказать звонок
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
    </button>

</div>
