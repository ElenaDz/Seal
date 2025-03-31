<?php
namespace APP\Config;

use APP\Action\Index;
use APP\Action\User;
use APP\Action\UserLogin;
use APP\Action\UserReg;

class Routes
{
    public static function getConfig(): array
    {
        return [
            [
	            Index::getUrl(),
	            Index::class
            ],
	        [
		        User::getUrl(),
		        User::class,
	        ],
	        [
		        UserLogin::getUrl(),
		        UserLogin::class
	        ],
	        [
		        UserReg::getUrl(),
		        UserReg::class
	        ],
        ];
    }
}