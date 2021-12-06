<?php

namespace App\Presenter;

class SampleGreet implements SampleGreetInterface
{
    public $template;

    function __construct(object $template)
    {
        $this->template = $template;
    }

    public function display(string $name): void
    {
        $this->template->set("name", $name);
        $this->template->display("hello.php");
    }
}
