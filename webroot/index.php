<?php

use App\UseCase\SampleInterface;

require(__DIR__ . "/../init.php");

$guestName = "Guest name";

$sample = App::getContainerBuilder()->get(SampleInterface::class);
$sample->greet($guestName);
