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



	// fixme удалить все автоматически сгенерированные гетере и сетеры, которые не используются ok
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

	// fixme расширение файла нужно хранить в БД ok
    public function getCover()
    {
        return $this->cover;
    }

    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    public function getCertificate()
    {
        return $this->certificate;
    }
}
