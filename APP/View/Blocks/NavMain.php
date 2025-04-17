<?php

use APP\Entity\Contact;
use APP\Entity\Product;

/** @var Product $products */
/** @var Contact[] $contacts */
?>

<nav class="navbar p-0  navbar-expand-lg bg-body-tertiary">

    <div class="container">
        <div class="p-2">

            <button class="navbar-toggler sandwich" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
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
                                    <?php if ($_SERVER["REQUEST_URI"] == \APP\Action\PageProduct::getUrl($product->getId())):?>
                                        <span class="dropdown-item"> <?= $product->getTitle() ?></span>
                                    <?php else: ?>
                                        <a class="dropdown-item" href="<?= \APP\Action\PageProduct::getUrl($product->getId())?>">
                                            <?= $product->getTitle() ?>
                                        </a>
                                    <?php endif;?>

                                </li>
                            <?php endforeach ?>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <?php if ($_SERVER["REQUEST_URI"] == \APP\Action\About::getUrl()):?>
                            <span class="nav-link">О Компании</span>
                        <?php else: ?>
                            <a class="nav-link" href="<?= \APP\Action\About::getUrl() ?>">О Компании</a>
                        <?php endif;?>
                    </li>

                    <li class="nav-item">
                        <?php if ($_SERVER["REQUEST_URI"] == \APP\Action\Contacts::getUrl()):?>
                            <span class="nav-link">Контакты</span>
                        <?php else: ?>
                            <a class="nav-link" href="<?= \APP\Action\Contacts::getUrl() ?>">Контакты</a>
                        <?php endif;?>
                    </li>

                    <li class="nav-item location">
                        <a class="nav-link" href="#"> <b>Находка</b> ул. Спортивная, д. 51а</a>
                    </li>

                    <?php foreach ($contacts as $contact): ?>
                        <?php if ($contact->getType() === 'Phone'):?>
                            <li class="nav-item phone">
                                <a href="tel:<?= $contact->getHref()?>" class="nav-link">
                                    <b><?= $contact->getName() ?></b>
                                </a>
                            </li>
                        <?php elseif ($contact->getType() === 'Mail'): ?>

                            <li class="nav-item mail">
                                <a class="nav-link" href="mailto:<?= $contact->getHref()?>">
                                    <b><?= $contact->getName() ?></b>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

</nav>