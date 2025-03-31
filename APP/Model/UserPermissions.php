<?php
namespace APP\Model;

class UserPermissions
{
	const USER = 'user';
	const MANAGER = 'manager';
	const ADMIN = 'admin';

	public static function isValid(string $permissions)
	{
		return in_array($permissions, self::getAll(), true);
	}

	public static function isValidOrFall(string $permissions)
	{
		if (empty($permissions)) {
			throw new \Exception('Empty permissions');
		}

		if ( ! self::isValid($permissions)) {
			throw new \Exception(
				sprintf(
					'Invalid permissions "%s", valid permissions "%s"',
					$permissions,
					implode(', ', self::getAll())
				)
			);
		}
	}

	public static function getAll()
	{
		return [
			self::USER,
			self::MANAGER,
			self::ADMIN
		];
	}

	public static function getWeight($permissions): int
	{
		self::isValidOrFall($permissions);

		$weights = [
			self::USER => 3,
			self::MANAGER => 5,
			self::ADMIN => 9
		];

		return $weights[$permissions];
	}
}