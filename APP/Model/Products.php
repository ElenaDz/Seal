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

    /**
     * @param int $id
     * @return Product
     */
	// fixme удалить тип возвращаемого значения ok
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