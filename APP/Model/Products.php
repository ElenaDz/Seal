<?php

namespace APP\Model;

use APP\Entity\Product;

class Products extends _Base
{
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