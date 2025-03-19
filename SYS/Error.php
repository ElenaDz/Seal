<?php

namespace SYS;

class Error
{
    public static function showError($msg, $code = 500, $url = '')
    {
        if (empty($url)) {
            $massage = $msg;

        } else {
            $massage = "Ошибка ".$code.". Страница ".$url." не найдена";
        }

        http_response_code($code);

        echo $massage;

        exit;
    }

}