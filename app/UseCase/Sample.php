<?php

namespace App\UseCase;

use App\Presenter\SampleGreetInterface;

class Sample implements SampleInterface
{
    public $greet;

    function __construct(SampleGreetInterface $greet)
    {
        $this->greet = $greet;
    }

    public function greet(string $name): void
    {
        $this->greet->display($name);
    }
}
