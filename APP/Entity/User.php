<?php
namespace APP\Entity;

use APP\Model\UserPermissions;
use APP\Service\Auth;

class User
{
	const NAME_HASH = 'hash';
	const NAME_PERMISSIONS = 'permissions';
	const NAME_TOKEN = 'token';

	private $id;
	private $login;
	private $hash;
	private $permissions;
	private $token;

	public function getId(): int
	{
		return (int) $this->id;
	}

	public function getLogin() : string
	{
		return $this->login;
	}

	public function verifyPass($pass): bool
	{
		return Auth::passwordVerify($pass, $this->hash);
	}


	public function getPermissions()
	{
		return $this->permissions;
	}

	public function isAdmin(): bool
	{
		return UserPermissions::getWeight($this->permissions) >= UserPermissions::getWeight(UserPermissions::ADMIN);
	}

	public function isManager(): bool
	{
		return UserPermissions::getWeight($this->permissions) >= UserPermissions::getWeight(UserPermissions::MANAGER);
	}

	public function createToken()
	{
		$this->token = md5(uniqid('', true));
	}

	public function getToken(): string
	{
		return $this->token;
	}

	public function resetToken()
	{
		unset($this->token);
	}

	public function save()
	{
		\APP\Model\Users::save($this);
	}
}