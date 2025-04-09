<?php
namespace APP\Action;

use APP\Model\Products;
use SYS\Views;

class Index extends _Base
{
	public function __invoke()
	{
        $products = Products::getAll();


		$content = Views::get(
			__DIR__ . '/../View/Index.php',
			[
                'products' => $products
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