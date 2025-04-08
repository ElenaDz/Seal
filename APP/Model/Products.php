<?php

namespace APP\Model;

use APP\Entity\Product;

class Products extends _Base
{
	/**
	 * @return Product[]
	 */
    public static function getAll()
    {
        $results = self::getPDO()->query(
            'SELECT * FROM products'
        );

        return $results->fetchAll(
            \PDO::FETCH_CLASS,
            Product::class
        );
    }

	// fixme добавь phpdoc с указанием типа возвращаемого знания
    public static function getById(int $id)
    {
        $results = self::getPDO()->query(
            'SELECT * FROM products
                    where products.id = '.((int)$id)
        );

        return $results->fetchObject(
            Product::class
        );
    }
}