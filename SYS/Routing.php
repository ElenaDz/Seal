<?php
namespace SYS;

class Routing
{
    private $config;

    function __construct($config)
    {
        $this->config = $config;
    }

    function run()
    {
        $url = $_SERVER['REQUEST_URI'];

        foreach ( $this->config as $url_config)
        {
            $url = urldecode($url);

            $pattern = $url_config[0];

            $reg_ext = $pattern === '' ? '#/#' : "#$pattern#u";

            $result = preg_match($reg_ext, $url, $matches);


            if ($result === 1 && $matches[0] === $url) {

                $class_name = $url_config[1];

                unset($matches[0]);

	            $params = $matches;

	            $action = new $class_name();

	            $action(... $params);

                return;
            }
        }

		throw new \Exception(
			sprintf('Страница "%s" не найдена', $url),
			404
		);
    }
}

