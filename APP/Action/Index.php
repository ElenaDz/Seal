<?php
namespace APP\Action;

use SYS\Views;

class Index extends _Base
{
    public static function index()
    {

        $content = Views::get(
            __DIR__ . '/../View/Index.php',
            [

            ]
        );

        self::showLayout(
            'Seal',
            $content
        );
    }

    public static function getUrl(): string
    {
        return '/';
    }
}