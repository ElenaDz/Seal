<?php
namespace APP\Action;

use APP\Service\Auth;
use SYS\Views;

class Index extends _Base
{
	public function __invoke()
	{
		var_dump(Auth::isManager());
		exit;

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