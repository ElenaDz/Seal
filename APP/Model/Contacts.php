<?php

namespace APP\Model;

use APP\Entity\Contact;

class Contacts extends _Base
{
    /**
     * @return Contact[]
     */
    public static function getAll(): array
    {
        $results = self::getPDO()->query(
            'SELECT * FROM Contacts'
        );

        return $results->fetchAll(
            \PDO::FETCH_CLASS,
            Contact::class
        );
    }
    public static function getByType($type)
    {
        $results = self::getPDO()->query(
            'SELECT * FROM Contacts
                    where Contacts.type = '.$type
        );

        return $results->fetchObject(
            Contact::class
        );
    }
}