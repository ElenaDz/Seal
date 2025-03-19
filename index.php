<?php

require __DIR__.'/SYS/Autoload.php';

\SYS\Autoload::register();

require __DIR__.'/SYS/Aliases.php';

try {
    $config_routes = \APP\Config\Routes::getConfig();

    $routing = new \SYS\Routing($config_routes);

    $routing->run();

} catch (Exception $exception) {
    \SYS\Error::showError(
        $exception->getMessage(),
        500
    );
}