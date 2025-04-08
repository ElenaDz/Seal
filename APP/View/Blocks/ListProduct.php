<?php
use APP\Entity\Product;

/** @var Product $products */

?>
<div>
    <div class="container">
        <div class="list_product">
            <!-- fixme не совпадает имя класса блока и имя файла ok-->
            <div class="card-group">
                <!-- fixme вынеси карточку в отельный шаблон делать цикл ok-->

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


</div>

