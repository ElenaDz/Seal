<?php
namespace APP\Action;

use APP\Service\Auth;
use SYS\Views;

class UserLogin extends _Base
{
	const POST_NAME_LOGIN = 'login';
	const POST_NAME_PASS = 'pass';
	const POST_NAME_SUBMIT = 'submit';

	public function __invoke()
	{
		$errors = [];
		if ($_POST[self::POST_NAME_SUBMIT])
		{
			$login = $_POST[self::POST_NAME_LOGIN];
			$pass = $_POST[self::POST_NAME_PASS];

			try {
				Auth::logon($login, $pass);

			} catch (\DomainException $exception) {
				$errors[self::POST_NAME_SUBMIT] = $exception->getMessage();
			}
		}

		self::showLayoutBlank(
			'Авторизация',
			Views::get(
				__DIR__ . '/../View/UserLogin.php',
				[
					'errors' => $errors
				]
			)
		);
	}

	public static function getUrl()
	{
		return '/user/login/';
	}
}