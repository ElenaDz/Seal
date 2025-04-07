<?php
use APP\Entity\Product;

/** @var Product $product */

return;
?>

<div class="card shadow p-3 mb-5 bg-white rounded">
    <a href="<?= \APP\Action\PageProduct::getUrl($product->getId)?>">
        <img src="/assets/img/seal/<?= $product->getCover ?>" class="card-img-top" alt="<?= $product->getCover ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $product->getTitle ?></h5>
            <p class="card-text"><?= $product->getDescription ?></p>
        </div>
    </a>
</div>
