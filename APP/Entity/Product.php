<?php

namespace APP\Entity;

class Product
{
    private $id;
    private $title;
    private $description;
    private $characteristics;
    private $cover;
    private $certificate;


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function getCoverUrl()
    {
        return "/assets/img/seal/$this->cover";
    }

    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    public function getCertificateUrl()
    {
        return "/assets/certificate/$this->certificate";
    }
}
