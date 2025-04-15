<?php

namespace APP\Action;

use SYS\Views;

class Contacts extends _Base
{
    public  function __invoke() {

        $contacts = \APP\Model\Contacts::getAll();

        $content = Views::get(
            __DIR__ . '/../View/Contacts.php',
            [
                'contacts' => $contacts
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