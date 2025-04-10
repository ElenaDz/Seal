<?php

namespace APP\Model;

use APP\Entity\Product;

class Products extends _Base
{
	/**
	 * @return Product[]
	 */
    public static function getAll(): array
    {
        $results = self::getPDO()->query(
            'SELECT * FROM products'
        );

        return $results->fetchAll(
            \PDO::FETCH_CLASS,
            Product::class
        );
    }

	// fixme добавь phpdoc с указанием типа возвращаемого знания ok

    /**
     * @param int $id
     * @return Product
     */
    public static function getById(int $id): Product
    {
        $results = self::getPDO()->query(
            'SELECT * FROM products
                    where products.id = '.((int)$id)
        );

        return $results->fetchObject(
            Product::class
        );
    }

    public static function getAllBySelect($select): array
    {
        $results = self::getPDO()->query(
            "SELECT $select FROM products"
        );

        return $results->fetchAll(
            \PDO::FETCH_CLASS,
            Product::class
        );
    }

}