<?php
namespace APP\Action;

use SYS\Views;

class Index extends _Base
{
	public function __invoke()
	{
		$content = Views::get(
			__DIR__ . '/../View/Index.php',
			[

			]
		);

		self::showLayoutMain(
			'Техно ЗПУ',
			$content
		);
	}

	public static function getUrl(): string
	{
		return '/';
	}
}