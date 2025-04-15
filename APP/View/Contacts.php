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
                         692904, Приморский край, г. Находка,&nbsp;<span>ул. Спортивная, д. 51а</span>
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
                    <!-- fixme для посетителя сайта после обфускации ни чего не должно измениться он должен видеть тоже, что было до обфускации-->
                    <div class="col-10">
                        <a href="mailto:<?= $contact->getHref()?>">
                            <b><?= $contact->getName() ?></b>
                        </a>
                        <!-- fixme перенеси работу с обфускатором в класс сущности Contact -->
                        <?php
                            $email = \Kminek\EmailObfuscator::obfuscate(
                                $contact->getName(),
                                'почта для связи',
                                ['class' => 'some-class', 'id' => 'some-id', 'noscript' => 'Custom noscript contents']
                            );
                            echo $email;
                        ?>
                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach; ?>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-2">

            <ul class="list-unstyled d-flex">
                Соцсети:
                <?php foreach ($contacts as $contact): ?>
                    <?php if ($contact->getType() === 'Social media'):?>

                        <li class="ms-3"><a class="link-body-emphasis" href="<?= $contact->getName() ?>"><i class="telegram social_icon bi"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="<?= $contact->getName() ?>"><i class="whatsapp social_icon bi"></i></a></li>

                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>

        <?=
            \SYS\Views::get(
                __DIR__.'/Blocks/Map.php'
            );
        ?>

    </div>