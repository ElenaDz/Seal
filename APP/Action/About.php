<?php

namespace APP\Action;

use SYS\Views;

class About extends _Base
{
    public  function __invoke() {

        $content = Views::get(
            __DIR__ . '/../View/About.php',
            [

            ]
        );


        self::showLayoutMain(
            'О Компании',
            $content,
            [
                [
                    'name' => 'Главная',
                    'url' => Index::getUrl()
                ],
                [
                    'name' => 'О Компании'
                ]
            ]
        );
    }

    public static function getUrl(): string
    {
        return "/about/";
    }
}