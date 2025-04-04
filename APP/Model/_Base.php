<?php
namespace APP\Model;

abstract class _Base
{
	private static \PDO $pdo;

	protected static function getPDO(): \PDO
	{
		if (empty(self::$pdo)) {
			self::$pdo = new \PDO(
				'mysql:host=localhost;dbname=seal',
				'seal',
				's3*LNt$9'
			);
		}
		return self::$pdo;
	}
}