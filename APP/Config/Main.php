<?php
namespace APP\Config;

class Main
{
	public static function getTitle(): string
    {
		return self::isTehnomarket() ? 'ТЕХНОМАРКЕТ' : 'ДВ Трансмаркет';
	}

    public static function getMails(): array
    {
        return [
            self::isTehnomarket() ? self::getMailForTehnomarket() : self::getMailForDVTransmarket(),

        ];
    }

    public static function getMailForTehnomarket(): string
    {
        $name = 'tehnomarket.nhk@yandex.ru';

        return \Kminek\EmailObfuscator::obfuscate(
            $name,
            '<b>' . $name . '</b>'
        );
    }

    public static function getMailForDVTransmarket(): string
    {
        $name = 'dvtransmarket@gmail.com';

        return \Kminek\EmailObfuscator::obfuscate(
            $name,
            '<b>' . $name . '</b>'
        );
    }

    public static function getMailGeneral(): string
    {
        $name = 'office@tehno-nhk.ru';

        return \Kminek\EmailObfuscator::obfuscate(
            $name,
            '<b>' . $name . '</b>'
        );
    }

    public static function isTehnomarket()
    {
        return true;
    }
}