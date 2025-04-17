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

	// fixme нельзя внутренности БД выставлять наружу, этот метод пускай будет private вместо него нужно создать методы
	//  isPhone и тд и использовать их (после сдачи)

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
