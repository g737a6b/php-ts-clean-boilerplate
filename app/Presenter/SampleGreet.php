<?php

namespace App\Presenter;

class SampleGreet implements SampleGreetInterface
{
    public $template;

    function __construct(object $template)
    {
        $this->template = $template;
    }

    /**
     * {@inheritDoc}
     */
    public function display(string $name): void
    {
        $this->template->set("name", $name);
        $this->template->display("hello.php");
    }

    /**
     * {@inheritDoc}
     */
    public function echoInJapanese(): void
    {
        echo "こんにちは" . PHP_EOL;
    }
}
