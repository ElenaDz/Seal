<?php
namespace APP\Action;

use APP\Service\Auth;
use SYS\Response;

class User extends _Base
{
	public function __invoke()
	{
		if ( ! Auth::isAuthorized()) {
			Response::redirect(UserLogin::getUrl());
		}
	}

	public static function getUrl()
	{
		return '/user/';
	}
}