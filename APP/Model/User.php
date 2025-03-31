<?php
namespace APP\Model;

use APP\Service\Auth;

class User extends _Base
{
	public static function getByLogin($login)
	{
		$pdo = self::getPDO();

		$results = $pdo->prepare(
			'SELECT * FROM users WHERE login=:login'
		);

		$results->execute([
			'login' => $login
		]);

		return $results->fetchObject(
			\APP\Entity\User::class
		);
	}

	/**
	 * @param $id
	 * @return \APP\Entity\User
	 */
	public static function getById($id)
	{
		$results = self::getPDO()->query (
			'SELECT * FROM users WHERE id ='. (int) $id
		);

		return $results->fetchObject(
			\APP\Entity\User::class
		);
	}

	public static function getByToken($token)
	{

	}

	public static function add($login, $pass, $permissions = UserPermissions::USER): int
	{
		$user = self::getByLogin($login);
		if ( ! empty($user)) {
			throw new \Exception(
				sprintf(
					'Пользователь с логин "%s" уже существует',
					$login
				)
			);
		}

		$hash = Auth::getHash($pass);

		UserPermissions::isValidOrFall($permissions);

		$prepare = self::getPDO()->prepare(
			'INSERT INTO 
                     users
                    (login, hash, permissions) 
                VALUES 
                    (:login, :hash, :permissions)'
		);

		$prepare->execute([
			'login' => $login,
			'hash' => $hash,
			'permissions' => $permissions,
		]);

		return self::getPDO()->lastInsertId();
	}
}