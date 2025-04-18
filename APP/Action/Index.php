<?php
namespace APP\Action;

use APP\Config\Main;
use APP\Model\Products;
use SYS\Views;

class Index extends _Base
{
	public function __invoke()
	{
        $products = Products::getAll();
        if (empty($products)) {

        }

		$content = Views::get(
			__DIR__ . '/../View/Index.php',
			[
                'products' => $products
			]
		);

		self::showLayoutMain(
			Main::getTitle(),
			$content
		);
	}

	public static function getUrl(): string
	{
		return '/';
	}
}