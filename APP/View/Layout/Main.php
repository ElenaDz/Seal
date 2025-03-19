<?php

/** @var string $title */
/** @var string $content */
/** @var array $bread_crumbs */

use SYS\Views;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/main.css?v=<?= filemtime(__DIR__ . '/../../../css/main.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title><?= $title; ?></title>
</head>

<body>

<header>

    <div class="container d-flex">
        <div class="w-100 d-flex align-items-center">
            <img class="logo" src="../../../assets/Logo/logo.png" alt="">

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
        </div>

        <div class="w-100 d-flex align-items-center">
            <div>Локация </div>
            <div>Телефоны, обратный звонок</div>
            <div>Почта</div>
            <div>Корзина?</div>

        </div>

    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Главная</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Каталог
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Действие</a></li>
                            <li><a class="dropdown-item" href="#">Другое действие</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Доставка</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">О Компании</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</header>

<main>
    <?php if ($_SERVER['REQUEST_URI'] !== \APP\Action\Index::getUrl()): ?>

        <?=
        Views::get(
            __DIR__ . '/../Blocks/BreadCrumbs.php',
            [
                'bread_crumbs' => $bread_crumbs
            ]
        );
        ?>

    <?php endif; ?>

    <?= $content; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Каталог</a></li>
            <li class="breadcrumb-item active" aria-current="page">Данные</li>
        </ol>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://m.media-amazon.com/images/I/61rA2HUCX6L._SX3000_.jpg" class="d-block w-100" alt="1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Метка первого слайда</h5>
                    <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://m.media-amazon.com/images/I/61rA2HUCX6L._SX3000_.jpg" class="d-block w-100" alt="2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Метка второго слайда</h5>
                    <p>Некоторый репрезентативный заполнитель для второго слайда.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://m.media-amazon.com/images/I/61rA2HUCX6L._SX3000_.jpg" class="d-block w-100" alt="3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Метка третьего слайда</h5>
                    <p>Некоторый репрезентативный заполнитель для третьего слайда.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>


</main>

<footer  class="fixed-bottom">
    <div class="container">

        <div class="d-flex">
            <div class="">
                <img class="logo" src="../../../assets/Logo/logo.png" alt="">
            </div>
            <div>Контактные данные, информация</div>
            <div>
                sitemap
            </div>
            <div>
               Форма обрнатного завонка
            </div>
    </div>
</footer>

</body>
</html>
