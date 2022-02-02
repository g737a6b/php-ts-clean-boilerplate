<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;

require_once(__DIR__ . "/vendor/autoload.php");

class App
{
    private static $containerBuilder = null;

    public static function getContainerBuilder()
    {
        if (!isset(self::$containerBuilder)) {
            self::$containerBuilder = new ContainerBuilder();
        }
        return self::$containerBuilder;
    }
}

include(__DIR__ . "/app/config/di.php");
