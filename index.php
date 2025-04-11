<?php

require __DIR__.'/SYS/Autoload.php';
require __DIR__.'/vendor/email-obfuscator-master/src/EmailObfuscator.php';
use Kminek\EmailObfuscator ;

\SYS\Autoload::register();

\SYS\Error::init();

require __DIR__.'/SYS/Aliases.php';

$config_routes = \APP\Config\Routes::getConfig();

$routing = new \SYS\Routing($config_routes);

$routing->run();