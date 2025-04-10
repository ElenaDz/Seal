<?php
use APP\Entity\Product;

/** @var Product $products */

?>
<nav class="navbar p-0  navbar-expand-lg bg-body-tertiary">

    <div class="container">
        <div class="">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ЗПУ
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($products as $product):  ?>
                                <li>
                                    <a class="dropdown-item" href="<?= \APP\Action\PageProduct::getUrl($product->getId())?>">
                                        <?= $product->getTitle() ?>
                                    </a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= \APP\Action\About::getUrl() ?>">О Компании</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= \APP\Action\Contacts::getUrl() ?>">Контакты</a>
                    </li>

                    <li class="nav-item location">
                        <a class="nav-link" href="#"> <b>Находка</b> ул. Спортивная, д. 51а</a>
                    </li>

                    <li class="nav-item phone">
                        <a class="nav-link" href="tel:+74236702701"><b>+7 (4236) 702-701</b></a>
                    </li>

                    <li class="nav-item mail">
                        <a class="nav-link" href="mailto:office@tehno-nhk.ru">
                            <b>office@tehno-nhk.ru</b>
                        </a>
                    </li>

                    <li  class="nav-item mail">
                        <a class="nav-link" href="mailto:tehnomarket.nhk@yandex.ru">
                            <b>tehnomarket.nhk@yandex.ru</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</nav>