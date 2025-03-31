<?php
namespace APP\Action;

use APP\Service\Auth;
use SYS\Views;

class UserLogin extends _Base
{
	const POST_NAME_LOGIN = 'login';
	const POST_NAME_PASS = 'pass';

	public function __invoke()
	{

		self::showLayoutBlank(
			'Авторизация',
			Views::get(
				__DIR__ . '/../View/UserLogin.php'
			)
		);
	}

	public static function getUrl()
	{
		return '/user/login/';
	}
}