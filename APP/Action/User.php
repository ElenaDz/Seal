<?php
namespace APP\Action;

use APP\Model\Users;
use APP\Service\Auth;
use SYS\Response;
use SYS\Views;

class User extends _Base
{
	public function __invoke()
	{
		if ( ! Auth::isAuthorized()) {
			Response::redirect(UserLogin::getUrl());
		}

		$user = Auth::getUser();

		if ($user->isAdmin()) {
			$users = Users::getAll();
		}

		self::showLayoutBlank(
			'Профиль',
			Views::get(
				__DIR__ . '/../View/User.php',
				[
					'user' => $user,
					'users' => $users
				]
			)
		);
	}

	public static function getUrl()
	{
		return '/user/';
	}
}