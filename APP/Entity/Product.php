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

	// fixme html в БД без необходимости недопустим (после сдачи)
    public function getDescription()
    {
        return $this->description;
    }

	// fixme этот метод должен возвращать то чем удобно пользоваться программиста, а именно url картинки, а не имя файла ok
    public function getCoverUrl()
    {
        return "/assets/img/seal/$this->cover";
    }

    public function getCharacteristics()
    {
        return $this->characteristics;
    }

	// fixme должен возвращать url, переименовать ok
    public function getCertificateUrl()
    {
        return "/assets/certificate/$this->certificate";
    }
}
