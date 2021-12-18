<?php

use App\UseCase\SampleInterface;

require(__DIR__ . "/../../../init.php");

$sample = App::getContainerBuilder()->get(SampleInterface::class);
$sample->exit();
