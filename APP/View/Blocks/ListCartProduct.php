<?php
use APP\Entity\Product;

/** @var Product $products */

?>
<div>
    <div class="list_cart_product">
        <div class="card-group">
            <?php foreach ($products as $product):  ?>
                <?=
                    \SYS\Views::get(
                        __DIR__.'/CardProduct.php',
                        [
                               'product' => $product
                        ]
                    );
                ?>
            <?php endforeach ?>
        </div>
    </div>
</div>

