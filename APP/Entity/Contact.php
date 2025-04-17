<?php

namespace APP\Entity;

use APP\Config\Main;

class Contact
{
    private $id;
    private $type;
    private $name;
    private $description = null;
    private $href;

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHref() :string
    {
        return $this->href;
    }

    public function getMail()
    {
        $name = $this->getName();

        if ($name === "tehnomarket.nhk@yandex.ru") {
            $name = Main::getMail();
        }

        return \Kminek\EmailObfuscator::obfuscate(
            $name,
            '<b>' . $name . '</b>'
        );
    }
}
