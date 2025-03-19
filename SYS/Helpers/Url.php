<?php
namespace SYS\Helpers;

class Url
{
	public static function isUrl($url)
	{
		return $_SERVER['REQUEST_URI'] === $url;
	}
}