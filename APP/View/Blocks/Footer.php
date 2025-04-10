<?php
use APP\Entity\Product;

/** @var Product[] $products */

?>
<div class="wrap_footer text-white">
    <div class="container">
        <footer class="py-4">
            <div class="row inner_footer">
                <div class="site_map">
                    <div class="me-2">
                        <img class="logo" src="/assets/img/logo/logo-white.png" alt="<?= \APP\Config\Main::getTitle(); ?>">
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="element">
                            <h5>ЗПУ</h5>
                            <ul class="nav flex-column">
                                <?php foreach ($products as $product):  ?>
                                    <li class="nav-item mb-2">
                                        <a href="<?= \APP\Action\PageProduct::getUrl($product->getId())?>" class="nav-link p-0">
                                            <?= $product->getTitle() ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>

                        <div class="element">
                            <h5><a href="<?= \APP\Action\About::getUrl() ?>">О Компании</a></h5>

                        </div>

                        <div class="element">
                            <h5><a href="<?= \APP\Action\Contacts::getUrl() ?>">Контакты</a></h5>
                        </div>
                    </div>

                </div>

                <div class="call_back col-md-5 offset-md-1 mb-3">
                    <div class="phone_wrap d-none d-sm-flex col-sm-4 col-xl-2 col-xxl-2 row align-items-center">
                        <div class="col-2 p-0"><img src="/assets/img/connection/mphone-white.svg" class="top-icon" alt=""></div>
                        <div class="phone_inner col-10 ps-2 pe-0 font08">
                            <a href="tel:+74236702701" class="color_black">
                                <b>+7 (4236) 702-701</b>
                            </a><br>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">заказать звонок</a>
                        </div>
                    </div>
                    <div class="mail_wrap d-none d-sm-flex col-sm-4 mt-2 col-xl-2 col-xxl-2 row align-items-center">
                        <div class="col-2 p-0"><img src="/assets/img/connection/mail-wite.svg" class="top-icon" alt="mail"></div>
                        <div class="mail_inner col-10 ps-2 pe-0 font08">
                            <a href="mailto:office@tehno-nhk.ru">
                                <b>office@tehno-nhk.ru</b>
                            </a><br>
                            <a href="mailto:tehnomarket.nhk@yandex.ru">
                                <b>tehnomarket.nhk@yandex.ru</b>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">

                        <ul class="list-unstyled d-flex">
                            Соцсети:
                            <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="telegram social_icon bi"></i></a></li>
                            <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="whatsapp social_icon bi"></i></a></li>
                        </ul>

                    </div>
                </div>

            </div>


        </footer>
    </div>
</div>
