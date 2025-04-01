<?php
namespace APP\Entity;

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

	public function passVerify($pass): bool
	{
		return Auth::passwordVerify($pass, $this->hash);
	}

	public function createToken()
	{
		$this->token = md5(uniqid('', true));
	}

	public function resetToken()
	{
		unset($this->token);
	}

	public function save()
	{
		\APP\Model\User::save($this);
	}
}