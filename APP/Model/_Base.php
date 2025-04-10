<?php
namespace APP\Model;

use PDO;

abstract class _Base
{
	/**
	 * @var PDO $pdo
	 */
	private static $pdo;

	protected static function getPDO(): PDO
	{
		if (empty(self::$pdo)) {
			self::$pdo = new PDO(
				'mysql:host=localhost;dbname=seal',
				'seal',
				's3*LNt$9'
			);
		}
		return self::$pdo;
	}
}