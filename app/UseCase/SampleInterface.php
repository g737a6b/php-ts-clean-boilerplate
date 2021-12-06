<?php

namespace App\UseCase;

use App\Presenter\SampleGreetInterface;

interface SampleInterface
{
    function __construct(SampleGreetInterface $greet);

    public function greet(string $name): void;
}
