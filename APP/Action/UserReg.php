<?php
namespace APP\Action;

use APP\Service\Auth;
use SYS\Views;

class UserReg extends _Base
{
	const POST_NAME_LOGIN = 'login';
	const POST_NAME_PASS = 'pass';
	const POST_NAME_SUBMIT = 'submit';

	public function __invoke()
	{
		$errors = [];

		if ($_POST[self::POST_NAME_LOGIN])
		{
			$login = $_POST[self::POST_NAME_LOGIN];
			$pass = $_POST[self::POST_NAME_PASS];

			$user = \APP\Model\User::getByLogin($login);
			if ( ! empty($user)) {
				$errors[self::POST_NAME_LOGIN] = 'Уже занят';
			}

			if (empty($errors)) {
				\APP\Model\User::add($login, $pass);
			}
		}

		self::showLayoutBlank(
			'Регистрация',
			Views::get(
				__DIR__ . '/../View/UserReg.php',
				[
					'errors' => $errors,
					'login' => $login
				]
			)
		);
	}

	public static function getUrl()
	{
		return '/user/reg/';
	}
}