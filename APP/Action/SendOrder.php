<?php

namespace APP\Action;

use APP\Helper\Email;

class SendOrder
{
	// fixme используй ее, это именно post параметр, если в проекте где то есть другой phone для него нужно заводить свою
	//  константу и использовать ее
	const NAME_POST_PHONE = 'phone';

    public  function __invoke()
    {
		// fixme не используй магических строк, вроде phone, используй константы
		$phone = $_POST[self::NAME_POST_PHONE];
		$name = $_POST['name'];

		// fixme нужна защита от пустых данных, на сайты ходят не только люди но и роботы а им твои ограничения requred непочем они будет слать пустые

		Email::send(
			"Техно-ЗПУ. Заказан обратный звонок тел: $phone",
			// fixme у тебя тело письма в html, используй htmlspecialchars для данных присланных пользователем
			"Заказан обратный звонок. <br> Номер: $phone <br> Имя: $name",
			// fixme у тебе емейл админа храниться в БД, он должен храниться только в одном месте, чтобы когда он измениться,
			//  изменять пришлось в одном месте Уже чувствуешь что использовать БД было плохой идеей?
			"Lenagosu@yandex.ru"
		);
    }

    public static function getUrl(): string
    {
        return "/send_order/";
    }
}