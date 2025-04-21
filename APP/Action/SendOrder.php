<?php

namespace APP\Action;

use APP\Config\Main;
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
            if (empty($phone) or empty($name)) {
                throw new Exception('К сожалению, неверно заполнены обязательные поля');
            }
            Email::send(
                Main::getTitle().". Заказан обратный звонок тел: $phone",
                htmlspecialchars("Заказан обратный звонок. <br> Номер: $phone <br> Имя: $name"),
                Main::getMail()
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