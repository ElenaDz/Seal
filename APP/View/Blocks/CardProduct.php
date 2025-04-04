<?php
use APP\Entity\Product;

/** @var Product $product */

return;
?>

<div class="card shadow p-3 mb-5 bg-white rounded">
    <img src="/assets/img/seal/<?= $product->cover ?>" class="card-img-top" alt="<?= $product->cover ?>">
    <div class="card-body">
        <h5 class="card-title"><?= $product->title ?></h5>
        <p class="card-text"><?= $product->description ?></p>
    </div>
</div>
