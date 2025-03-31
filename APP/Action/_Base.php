<?php

namespace APP\Action;

use SYS\Views;

abstract class _Base
{
    public static function showLayoutMain($title, $content, $bread_crumbs = [])
    {
        echo Views::get(
            __DIR__.'/../View/Layout/Main.php',
            [
                'title' => $title,
                'content' =>  $content,
                'bread_crumbs' => $bread_crumbs
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