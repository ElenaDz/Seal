<?php
use APP\Entity\Product;

/** @var Product $product */
?>
<div class="container  page_product bg-white shadow p-3 mb-5 bg-white rounded">
    <div class="d-flex cover_wrap">
        <div class="cover">
            <img src="/assets/img/seal/<?= $product->getCover()?>.jpg" width="100%" height="100%"  alt="">
        </div>



        <div class="characteristics_wrap">
            <div class="d-flex justify-content-between">
                <div><h2><?= $product->getTitle()?></h2></div>

                <div class="btn_wrap  btn_wrap_mobile d-none">
                    <button type="button" class="btn  btn_base"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@fat">
                        Заказать звонок
                    </button>
                </div>
            </div>

            <?= $product->getCharacteristics() ?>
        </div>
    </div>

    <div class="btn_wrap">
        <button type="button" class="btn  btn_base"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@fat">
            Заказать звонок
        </button>
    </div>

    <div class="d-flex info_description mt-3">
        <?= $product->getDescription() ?>

        <div class="certificate_wrap">
            <a href="/assets/certificate/<?= $product->getCertificate()?>.jpg">
                <img src="/assets/certificate/<?= $product->getCertificate()?>.jpg" width="100%" height="100%"  alt="<?= $product->getCertificate()?>">
            </a>
        </div>
    </div>

</div>


