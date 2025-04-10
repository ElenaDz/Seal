<?php
use APP\Entity\Product;

/** @var Product $products */

?>
<div>

        <!-- fixme это list_cart_product ok -->
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

