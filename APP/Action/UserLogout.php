<?php
namespace APP\Action;

use APP\Service\Auth;
use SYS\Response;

class UserLogout extends _Base
{
	public function __invoke()
	{
		if (empty($_POST)) {
			throw new \Exception('Только для POST запросов');
		}

		if (Auth::isAuthorized()) {
			Auth::logout();
		}

		Response::redirect(UserLogin::getUrl());
	}

	public static function getUrl()
	{
		return '/user/logout/';
	}
}