<?php

require __DIR__.'/SYS/Autoload.php';

\SYS\Autoload::register();

\SYS\Error::init();

require __DIR__.'/SYS/Aliases.php';

$config_routes = \APP\Config\Routes::getConfig();

$routing = new \SYS\Routing($config_routes);

$routing->run();