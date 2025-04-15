<?php

namespace APP\Action;

use APP\Helper\Email;

class SendOrder
{
    public  function __invoke()
    {

       Email::send($_POST, 'sdsds', "Lenagosu@yandex.ru");
    }

    public static function getUrl(): string
    {
        return "/send_order/";
    }
}