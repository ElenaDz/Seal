<?php
use APP\Entity\Product;

/** @var Product $products */


?>

<?=
	\SYS\Views::get(
		__DIR__.'/Blocks/Carousel.php',
		[
			'products' => $products
		]
	);
?>

<?=
	\SYS\Views::get(
		__DIR__ . '/Blocks/ListCartProduct.php',
		[
			'products' => $products
		]
	);
?>

<?=
	\SYS\Views::get(
		__DIR__.'/Blocks/AboutCompany.php'
	);
?>

<?=
	\SYS\Views::get(
		__DIR__.'/Blocks/Map.php'
	);
?>
