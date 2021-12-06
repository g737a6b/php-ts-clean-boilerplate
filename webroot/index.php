<?php

use App\UseCase\SampleInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

require(__DIR__ . "/../init.php");

$name = $_GET["name"];

$validator = Validation::createValidator();
$violations = $validator->validate($name, [
    new Length(["max" => 15]),
    new NotBlank(),
]);

if (0 !== count($violations)) {
    // display errors
}

$sample = App::getContainerBuilder()->get(SampleInterface::class);
$sample->greet($name);
