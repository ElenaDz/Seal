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



	// fixme удалить все автоматически сгенерированные гетере и сетеры, которые не используются
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }


	// fixme html в БД без необходимости недопустим, если он там нужен объясни мне зачем
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }


	// fixme расширение файла нужно хранить в БД
    public function getCover()
    {
        return $this->cover;
    }


    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    public function getCharacteristics()
    {
        return $this->characteristics;
    }


    public function setCharacteristics($characteristics)
    {
        $this->characteristics = $characteristics;
    }


    public function getCertificate()
    {
        return $this->certificate;
    }


    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;
    }


}
