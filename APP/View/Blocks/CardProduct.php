<?php
use APP\Entity\Product;

/** @var Product $product */

?>

<div class="card shadow p-3 mb-5 bg-white rounded">
    <a href="<?= \APP\Action\PageProduct::getUrl($product->getId())?>">
        <img src="/assets/img/seal/<?= $product->getCover() ?>.jpg" class="card-img-top" alt="<?= $product->getCover() ?>">
        <div class="card-body">
            <h5 class="card-title d-flex justify-content-center"><?= $product->getTitle() ?></h5>
        </div>
    </a>
</div>
