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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/css/main.css?v=<?= filemtime(__DIR__ . '/../../../assets/css/main.css')?>">
    <link rel="icon" href="/assets/img/logo/logo-mini.png" type="image/x-icon">

    <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
