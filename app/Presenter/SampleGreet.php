<?php

namespace App\Presenter;

use R2Template\R2Template;

class SampleGreet implements SampleGreetInterface
{
    public $template;

    function __construct(R2Template $template)
    {
        $this->template = $template;
    }

    public function display(string $name): void
    {
        $this->template->set("name", $name);
        $this->template->display("hello.php");
    }
}
