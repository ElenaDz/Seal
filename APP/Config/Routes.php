<?php
namespace APP\Config;

use APP\Action\About;
use APP\Action\Contacts;
use APP\Action\Index;
use APP\Action\PageProduct;
use APP\Action\User;
use APP\Action\UserLogin;
use APP\Action\UserLogout;
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
                About::getUrl(),
                About::class
            ],
            [
				// fixme плохой урл, сделай /product/<id>/
                '/(\d+)/',
                PageProduct::class
            ],
            [
                Contacts::getUrl(),
                Contacts::class
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
		        UserLogout::getUrl(),
		        UserLogout::class
	        ],
	        [
		        UserReg::getUrl(),
		        UserReg::class
	        ],
        ];
    }
}