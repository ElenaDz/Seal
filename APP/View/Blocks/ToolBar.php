<?php

use APP\Entity\Contact;

/** @var Contact[] $contacts */
?>

<div class="container">

    <div class="d-flex mb-3 justify-content-between">

        <div class="d-flex align-items-center">

            <?php if ($_SERVER['REQUEST_URI'] !== \APP\Action\Index::getUrl()): ?>
                <a href="<?= \APP\Action\Index::getUrl()?>">
                    <img class="logo" src="../../../assets/img/logo/dv/dv-black.png" alt="<?= \APP\Config\Main::getTitle(); ?>">
                </a>
            <?php else: ?>
                <img class="logo" src="../../../assets/img/logo/dv/dv-black.png" alt="<?= \APP\Config\Main::getTitle(); ?>">
            <?php endif;?>
        </div>

        <div class="slogan d-flex justify-content-center align-items-center">
            <p class=" d-flex justify-content-center m-0">
                Мы заботимся о сохранности вашего груза
            </p>
        </div>

        <div class="info d-flex align-items-center">
            <div>
                <a class="location_wrap d-none d-sm-flex col-sm-4 col-xl-2 col-xxl-2 row align-items-center" href="<?= \APP\Action\Contacts::getUrl()?>">
                    <div class="col-2 p-0"><img class="img-fluid" src="/assets/img/connection/location.svg" alt="location"></div>
                    <div class="location_inner col-10 ps-2 pe-0 font08">
                        <b>г. Находка</b> Находкинский проспект дом 12 офис 94
                    </div>
                </a>
            </div>

            <div class="phone_wrap d-none d-sm-flex col-sm-4 col-xl-2 col-xxl-2 row align-items-center">
                <div class="col-2 p-0"><img src="/assets/img/connection/mphone.svg" class="top-icon" alt="phone"></div>
                <div class="phone_inner col-10 ps-2 pe-0 font08">
                    <?php foreach ($contacts as $contact): ?>
                        <?php if ($contact->getType() === 'Phone'):?>

                            <a href="tel:<?= $contact->getHref()?>" class="color_black">
                                <b><?= $contact->getName() ?></b>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <br>
                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Заказать звонок</a>
                </div>
            </div>

            <div class="mail_wrap d-none d-sm-flex col-sm-4 col-xl-2 col-xxl-2 row align-items-center">
                <div class="col-2 w-auto p-0"><img src="/assets/img/connection/mail.svg" class="top-icon" alt="mail"></div>
                <div class="mail_inner col-10 ps-2 pe-0 font08">
                    <?php foreach ($contacts as $contact): ?>
                        <?php if ($contact->getType() === 'Mail'):?>

                            <?= $contact->getMail() ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>