<?php

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
                <a class="contact_link" href="tel:+74236702701">+7 (4236) 702-701</a></div>
        </div>

        <div class="row my-3">
            <div class="col-2 w-auto"><img class="float-end" src="/assets/img/connection/mail.svg" alt="" height="25px"></div>
            <div class="col-10"><a href="mailto:office@tehno-nhk.ru">
                    <!-- fixme контактный данные раскиданы по всему сайту Лучше указать их в файле конфигурации и брать оттуда -->
                    <b>office@tehno-nhk.ru</b>
                </a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-2 w-auto"><img class="float-end" src="/assets/img/connection/mail.svg" alt="" height="25px"></div>
            <div class="col-10"><a href="mailto:tehnomarket.nhk@yandex.ru">
                    <!-- fixme нельзя публиковать открыть емейл на сайте, в сети множество спам ботов которые лазят по сайтам и ищут емейлы,
                          нужно обфусцировать емейл например вот этим https://github.com/kminek/email-obfuscator -->
                    <b>tehnomarket.nhk@yandex.ru</b>
                </a>
            </div>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-between py-2">

            <ul class="list-unstyled d-flex">
                Соцсети:
                <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="telegram social_icon bi"></i></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="whatsapp social_icon bi"></i></a></li>
            </ul>

        </div>

        <?=
            \SYS\Views::get(
                __DIR__.'/Blocks/Map.php'
            );
        ?>

    </div>