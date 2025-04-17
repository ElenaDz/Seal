<?php

namespace APP\Action;

use APP\Helper\Email;
use PHPMailer\PHPMailer\Exception;

class SendOrder
{
	const NAME_POST_PHONE = 'phone';

    /**
     * @throws Exception
     */
    public  function __invoke()
    {
        try {
            $phone = $_POST[self::NAME_POST_PHONE];
            $name = $_POST['name'];

            Email::send(
                "Техно-ЗПУ. Заказан обратный звонок тел: $phone",
                "Заказан обратный звонок. <br> Номер: $phone <br> Имя: $name",
                "Lenagosu@yandex.ru"
            );
            echo "Заявка на звонок принята";
        }catch (\Exception $exception){
            throw new Exception('Заявка на звонок отклонена');
        }

    }

    public static function getUrl(): string
    {
        return "/send_order/";
    }
}