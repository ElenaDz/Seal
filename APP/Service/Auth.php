<?php
namespace APP\Service;

class Auth
{

	public static function isAuthorized(): bool
	{
		return false;
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