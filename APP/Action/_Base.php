<?php

namespace APP\Action;

use APP\Model\Products;
use SYS\Views;
use Kminek\EmailObfuscator;

abstract class _Base
{
    public static function showLayoutMain($title, $content, $bread_crumbs = [])
    {
        $products = Products::getAllBySelect('id, title');

        $contacts = \APP\Model\Contacts::getAll();

        if (empty($products)) {
        }

        echo Views::get(
            __DIR__.'/../View/Layout/Main.php',
            [
                'title' => $title,
                'content' =>  $content,
                'bread_crumbs' => $bread_crumbs,
                'products' => $products,
                'contacts' => $contacts,
                'email_obfuscator' => EmailObfuscator::class

            ]
        );
    }

	public static function showLayoutBlank($title, $content)
	{
		echo Views::get(
			__DIR__.'/../View/Layout/Blank.php',
			[
				'title' => $title,
				'content' =>  $content
			]
		);
	}
}