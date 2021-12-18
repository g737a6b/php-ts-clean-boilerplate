<?php

namespace App\Presenter;

use R2Template\R2Template;

interface SampleGreetInterface
{
    function __construct(R2Template $template);

    public function display(string $name): void;
}
