<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;

require_once(__DIR__ . "/vendor/autoload.php");

spl_autoload_register(function ($class) {
    $map = [
        "App\\Entity\\" => __DIR__ . "/app/Entity/",
        "App\\External\\" => __DIR__ . "/app/External/",
        "App\\Job\\" => __DIR__ . "/app/Job/",
        "App\\Presenter\\" => __DIR__ . "/app/Presenter/",
        "App\\Repository\\" => __DIR__ . "/app/Repository/",
        "App\\UseCase\\" => __DIR__ . "/app/UseCase/"
    ];
    foreach ($map as $prefix => $dir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            continue;
        }
        $file = $dir . str_replace("\\", "/", substr($class, $len)) . ".php";
        require($file);
        break;
    }
});

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
