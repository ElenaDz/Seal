<?php

namespace APP\Entity;

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
        return \Kminek\EmailObfuscator::obfuscate(
            $this->getHref(),
            '<b>' . $this->getName() . '</b>'
        );
    }
}
