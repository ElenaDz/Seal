<?php

use APP\Entity\Product;
use SYS\Views;

/** @var string $title */
/** @var string $content */
/** @var array $bread_crumbs */
/** @var Product $products */
/** @var Product $contacts */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title><?= $title; ?></title>

    <link href="/assets/bootstrap-5.3.5-dist/css/bootstrap.min.css?v=<?= filemtime(__DIR__ . '/../../../assets/bootstrap-5.3.5-dist/css/bootstrap.min.css')?>" rel="stylesheet" >
    <script src="/assets/bootstrap-5.3.5-dist/js/bootstrap.min.js?v=<?= filemtime(__DIR__ . '/../../../assets/bootstrap-5.3.5-dist/js/bootstrap.min.js')?>"></script>

    <link rel="stylesheet" href="/assets/css/main.css?v=<?= filemtime(__DIR__ . '/../../../assets/css/main.css')?>">
    <link rel="icon" href="../../../assets/img/logo/zpu/logo-mini.png" type="image/x-icon">

    <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
    <script  src="/assets/jquery/jquery-3.7.1.min.js"></script>
</head>

<body>

    <header>
        <?=
            Views::get(__DIR__.'/../Blocks/ToolBar.php',
                    [
                        'contacts' => $contacts
                    ]
            );
        ?>

        <?=
            Views::get(__DIR__.'/../Blocks/NavMain.php',
                [
                    'products' => $products,
                    'contacts' => $contacts
                ]
            );
        ?>
    </header>

    <main>
        <div class="container">
            <?=
                Views::get(
                    __DIR__ . '/../Blocks/BreadCrumbs.php',
                    [
                        'bread_crumbs' => $bread_crumbs
                    ]
                );
            ?>

            <?= $content; ?>
        </div>
    </main>
    <?=
        Views::get(__DIR__.'/../Blocks/Footer.php',
            [
                'products' => $products,
                'contacts' => $contacts
            ]
        );
    ?>

    <?=
        \SYS\Views::get(
            __DIR__.'/../Blocks/ModalCallback.php'
        );
    ?>

</body>
</html>
