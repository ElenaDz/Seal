<?php

namespace APP\Entity;

class Contact
{
    private $id;
    private $type;
    private $name;
    private $description = null;
    private $href;

	// fixme снова использует автогенерацию гетеров, перестань это делать, получается ерунда
    public function getId()
    {
        return $this->id;
    }

	// fixme нельзя внутренности БД выставлять наружу, этот метод пускай будет private вместо него нужно создать методы
	//  isPhone и тд и использовать их
    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

	// fixme не используется удалить
    public function getDescription() :string
    {
        return $this->description;
    }

    public function getHref() :string
    {
        return $this->href;
    }
}
