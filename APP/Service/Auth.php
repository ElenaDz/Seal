<?php
namespace APP\Service;

use APP\Model\User;

class Auth
{

	public static function isAuthorized(): bool
	{
		return false;
	}

	public static function logon($login, $pass)
	{
		$user = User::getByLogin($login);
		if (empty($user))
		{
			throw new \DomainException(
				sprintf(
					'Пользователь "%s" не найден',
					$login
				)
			);
		}

		if ( ! $user->passVerify($pass)) {
			throw new \DomainException('Не правильный пароль');
		}

		$user->createToken();

		$user->save();
	}

	public static function getHash($pass)
	{
		return password_hash($pass, \PASSWORD_BCRYPT);
	}

	public static function passwordVerify($pass, $hash)
	{
		return password_verify($pass, $hash);
	}
}