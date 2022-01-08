<?php

require_once(__DIR__ . "/init.php");

$jobName = $argv[1] ?: null;

try {
    if (is_string($jobName) && $job = App::getContainerBuilder()->get("App\\Job\\{$jobName}")) {
        $job->main();
    } else {
        throw new RuntimeException("Job {$jobName} was not found.");
    }
} catch (Throwable $e) {
    echo $e->getMessage() . PHP_EOL;
}
