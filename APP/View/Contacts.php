<?php

use APP\Entity\Contact;

/** @var Contact[] $contacts */
?>

<div class="contacts py-3">
    <h1 class="h3">Контакты</h1>
    <div class="bg-white p-5 rounded mb-2">
        <div class="row">
            <div class="d-flex address col-10">
                <p class="me-2 mb-0">Адрес:</p>
                <a href="https://go.2gis.com/4r1Xm">
                    <p class="m-0">
                         692904, Приморский край, г. Находка,&nbsp;<span>Находкинский проспект дом 12 офис 94</span>
                    </p>
                </a>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-flex col-10">
                <p class="me-2 mb-0">Телефон:</p>
                <?php foreach ($contacts as $contact): ?>
                    <?php if ($contact->getType() === 'Phone'):?>

                        <a href="tel:<?= $contact->getHref()?>" class="contact_link">
                            <b><?= $contact->getName() ?></b>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <?php foreach ($contacts as $contact): ?>
            <?php if ($contact->getType() === 'Mail'):?>

                <div class="row my-3">
                    <div class="col-2 w-auto"><img class="float-end" src="/assets/img/connection/mail.svg" alt="" height="25px"></div>
                    <div class="col-10">
                        <?= $contact->getMail() ?>
                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach; ?>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-2">
            <ul class="list-unstyled d-flex">
                Соцсети:
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="https://t.me/tehnomarketnhk" target="_blank">
                                <i class="telegram social_icon bi"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="https://wa.me/79020702701" target="_blank">
                                <i class="whatsapp social_icon bi"></i>
                            </a>
                        </li>
            </ul>
        </div>

        <?=
            \SYS\Views::get(
                __DIR__.'/Blocks/Map.php'
            );
        ?>

    </div>