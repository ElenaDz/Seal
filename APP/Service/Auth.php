<?php
namespace APP\Service;

use APP\Entity\User;
use APP\Model\Users;

class Auth
{
	const NAME_COOKIE_TOKEN = 'auth_token';

	/**
	 * @var User $user
	 */
	private static $user;


	public static function isAuthorized(): bool
	{
		$token = $_COOKIE[self::NAME_COOKIE_TOKEN];
		if (empty($token)) return false;

		if (self::$user) return true;

		$user = Users::getByToken($token);
		if (empty($user))
		{
			unset($_COOKIE[self::NAME_COOKIE_TOKEN]);
			setcookie(self::NAME_COOKIE_TOKEN, '', -1, "/");

			return false;
		}

		self::$user = $user;

		return true;
	}


	/**
	 * @return User|null
	 */
	public static function getUser()
	{
		if ( ! Auth::isAuthorized()) return null;

		return self::$user;
	}

	public static function isAdmin(): bool
	{
		if ( ! Auth::isAuthorized()) return false;

		return Auth::getUser()->isAdmin();
	}

	public static function isManager(): bool
	{
		if ( ! Auth::getUser()) return false;

		return Auth::getUser()->isManager();
	}



	public static function logon($login, $pass)
	{
		$user = Users::getByLogin($login);
		if (empty($user))
		{
			throw new \DomainException(
				sprintf(
					'Пользователь "%s" не найден',
					$login
				)
			);
		}

		if ( ! $user->verifyPass($pass)) {
			throw new \DomainException('Не правильный пароль');
		}

		$user->createToken();

		$user->save();

		$result = setcookie(self::NAME_COOKIE_TOKEN, $user->getToken(), time() + (3600 * 24 * 30), "/");
		if ( ! $result) {
			throw new \Exception('Не удалось установить cookie');
		}
	}


	public static function logout()
	{
		if ( ! Auth::isAuthorized()) return;

		$user = Auth::getUser();

		$user->resetToken();

		$user->save();

		unset($_COOKIE[self::NAME_COOKIE_TOKEN]);

		$result = setcookie(self::NAME_COOKIE_TOKEN, '', -1, "/");
		if ( ! $result) {
			throw new \Exception('Не удалось удалить cookie');
		}
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