<?php
namespace SYS;

class Views
{
    public static function get($__file_path, $__data = [])
    {
        extract((array) $__data);

        unset($__data);

        ob_start();

		if ( ! file_exists($__file_path)) {
			var_dump($__file_path);
			exit;
		}
        include $__file_path;

        return ob_get_clean();
    }
}