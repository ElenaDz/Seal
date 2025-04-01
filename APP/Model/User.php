<?php
namespace APP\Model;

use APP\Service\Auth;

class User extends _Base
{
	/**
	 * @param $id
	 * @return \APP\Entity\User|false
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


	/**
	 * @param $login
	 * @return \APP\Entity\User|false
	 */
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

	public static function save(\APP\Entity\User $user)
	{
		if (
				empty($user->getId())
			||  empty(self::getById($user->getId()))
		) {
			throw new \Exception(
				sprintf(
					'Пользователь "%s" не найден в БД',
					$user->getId()
				)
			);
		}

		$user_from_db = self::getById($user->getId());

		if ($user_from_db->getLogin() !== $user->getLogin())
		{
			throw new \Exception(
				sprintf(
					'Логин пользователя не может измениться. Был "%s", стал "%s"',
					$user_from_db->getLogin(),
					$user->getLogin()
				)
			);
		}

		$prepare = self::getPDO()->prepare(
			'UPDATE 
                        users 
                    SET 
                        `hash` = :hash, 
                        `permissions` = :permissions, 
                        `token` = :token
                    WHERE 
                        id = :id'
		);

		$ref_user = new \ReflectionClass($user);

		$prop_hash = $ref_user->getProperty(\APP\Entity\User::NAME_HASH);
		$prop_permissions = $ref_user->getProperty(\APP\Entity\User::NAME_PERMISSIONS);
		$prop_token = $ref_user->getProperty(\APP\Entity\User::NAME_TOKEN);

		$prop_hash->setAccessible(true);
		$prop_permissions->setAccessible(true);
		$prop_token->setAccessible(true);

		$prepare->execute([
			'id'            => $user->getId(),
			'hash'          => $prop_hash->getValue($user),
			'permissions'   => $prop_permissions->getValue($user),
			'token'         => $prop_token->getValue($user),
		]);
	}
}