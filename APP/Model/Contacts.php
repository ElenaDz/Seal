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
            'SELECT * FROM contacts'
        );

        return $results->fetchAll(
            \PDO::FETCH_CLASS,
            Contact::class
        );
    }

    public static function getByType($type)
    {
		// fixme а где защита от sql иньекций ?
        $results = self::getPDO()->query(
            'SELECT * FROM contacts
                    where contacts.type = '.$type
        );

        return $results->fetchObject(
            Contact::class
        );
    }
}