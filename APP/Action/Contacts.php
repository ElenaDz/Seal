<?php

namespace APP\Action;

use SYS\Views;

class Contacts extends _Base
{
    public  function __invoke() {

        $content = Views::get(
            __DIR__ . '/../View/Сontacts.php',
            [

            ]
        );


        self::showLayoutMain(
            'Контакты',
            $content,
            [
                [
                    'name' => 'Главная',
                    'url' => Index::getUrl()
                ],
                [
                    'name' => 'Контакты'
                ]
            ]
        );
    }

    public static function getUrl(): string
    {
        return "/contacts/";
    }
}