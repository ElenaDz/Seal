<?php

namespace APP\Action;

use APP\Helper\Email;

class SendOrder
{
    public  function __invoke()
    {
        $phone = $_POST['phone'];
        $name = $_POST['name'];
       Email::send("Техно-ЗПУ. Заказан обратный звонок тел: $phone", "Заказан обратный звонок. <br> Номер: $phone <br> Имя: $name", "Lenagosu@yandex.ru");
    }

    public static function getUrl(): string
    {
        return "/send_order/";
    }
}