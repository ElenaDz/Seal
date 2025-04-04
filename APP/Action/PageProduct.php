<?php

namespace APP\Action;

use SYS\Views;

class PageProduct extends _Base
{
    public  function __invoke($id) {

        $product =
        $content = Views::get(
            __DIR__ . '/../View/PageProduct.php',
            [

            ]
        );


        self::showLayoutMain(
            'Имя товара',
            $content,
            [
                [
                    'name' => 'Главная',
                    'url' => Index::getUrl()
                ],
                [
                    'name' => 'Имя товара'
                ]
            ]
        );
    }

    public static function getUrl($id): string
    {
        return "$id/";
    }
}