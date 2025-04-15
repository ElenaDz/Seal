<?php

namespace APP\Entity;

class Contact
{
    private $id;
    private $type;
    private $name;
    private $description = null;
    private $href;

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription() :string
    {
        return $this->description;
    }

    public function getHref() :string
    {
        return $this->href;
    }

}
