<?php

namespace APP\Action;

use APP\Model\Products;
use SYS\Views;

class PageProduct extends _Base
{
    public  function __invoke($id) {

        $product = Products::getById($id);

        $content = Views::get(
            __DIR__ . '/../View/PageProduct.php',
            [
                'product' => $product
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
        return "/product/$id/";
    }
}