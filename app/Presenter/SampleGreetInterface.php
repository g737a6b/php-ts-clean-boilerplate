<?php

namespace App\Presenter;

interface SampleGreetInterface
{
    function __construct(object $template);

    public function display(string $name): void;
}
