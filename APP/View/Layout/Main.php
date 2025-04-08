<?php

use APP\Entity\Product;
use SYS\Views;

/** @var string $title */
/** @var string $content */
/** @var array $bread_crumbs */
/** @var Product $products */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <title><?= $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/css/main.css?v=<?= filemtime(__DIR__ . '/../../../assets/css/main.css')?>">
    <link rel="icon" href="/assets/img/logo/logo-mini.png" type="image/x-icon">

    <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<!-- fixme есть крошечный горизонтальная прокрутка, нужно избавиться от нее -->
<body>

    <header>

        <?= Views::get(__DIR__.'/../Blocks/ToolBar.php'); ?>

        <?= Views::get(__DIR__.'/../Blocks/NavMain.php'); ?>

    </header>

    <main>
        <?=
            Views::get(
                __DIR__ . '/../Blocks/BreadCrumbs.php',
                [
                    'bread_crumbs' => $bread_crumbs
                ]
            );
        ?>

        <?= $content; ?>


    </main>

    <?= Views::get(__DIR__.'/../Blocks/Footer.php');?>

    <?=
        \SYS\Views::get(
            __DIR__.'/../Blocks/ModalCallback.php'
        );
    ?>

</body>
</html>
