<?php

namespace APP\Action;

use APP\Model\Products;
use SYS\Error;
use SYS\Views;

class PageProduct extends _Base
{
    public  function __invoke($id)
    {
        $product = Products::getById($id);
        if (empty($product)) {
            // fixme создать ошибку

        }

        $content = Views::get(
            __DIR__ . '/../View/PageProduct.php',
            [
                'product' => $product
            ]
        );


        self::showLayoutMain(
            $product->getTitle(),
            $content,
            [
                [
					// fixme если значений 2 то проще было было так, без магических строк name и url
	                // [
	                //      Index::getUrl() => 'Главная',
	                //      $product->getTitle()
	                // ]
                    'name' => 'Главная',
                    'url' => Index::getUrl()
                ],
                [
                    'name' => $product->getTitle()
                ]
            ]
        );
    }

    public static function getUrl($id): string
    {
        return "/product/$id/";
    }
}