<?php
namespace SYS;

class Views
{
    public static function get($__file_path, $__data = [])
    {
        extract((array) $__data);

        unset($__data);

        ob_start();

        include $__file_path;

        return ob_get_clean();
    }
}