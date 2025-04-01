<?php
namespace APP\Model;

use APP\Entity\User;
use APP\Service\Auth;

class Users extends _Base
{
	/**
	 * @param $id
	 * @return User|false
	 */
	public static function getById($id)
	{
		$results = self::getPDO()->query (
			'SELECT * FROM users WHERE id ='. (int) $id
		);

		return $results->fetchObject(
			User::class
		);
	}


	/**
	 * @param $login
	 * @return User|false
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
			User::class
		);
	}

	/**
	 * @param $token
	 * @return User|false
	 */
	public static function getByToken($token)
	{
		$pdo = self::getPDO();

		$results = $pdo->prepare(
			'SELECT * FROM users WHERE token=:token'
		);

		$results->execute([
			'token' => $token
		]);

		return $results->fetchObject(
			User::class
		);
	}

	/**
	 * @return User[]
	 */
	public static function getAll()
	{
		$pdo = self::getPDO();

		$results = $pdo->query(
			'SELECT * FROM users'
		);

		return $results->fetchAll(
			\PDO::FETCH_CLASS,
			User::class
		);
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

	public static function save(User $user)
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

		$prop_hash = $ref_user->getProperty(User::NAME_HASH);
		$prop_permissions = $ref_user->getProperty(User::NAME_PERMISSIONS);
		$prop_token = $ref_user->getProperty(User::NAME_TOKEN);

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