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

	// fixme этот метод должен возвращать то чем удобно пользоваться программиста, а именно url картинки, а не имя файла
    public function getCover()
    {
        return $this->cover;
    }

    public function getCharacteristics()
    {
        return $this->characteristics;
    }

	// fixme должен возвращать url, переименовать
    public function getCertificate()
    {
        return $this->certificate;
    }
}
