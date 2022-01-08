<?php

namespace App\UseCase;

use App\Entity\Guest;
use App\Presenter\SampleGreetInterface;

class Sample implements SampleInterface
{
    public $greet;

    function __construct(SampleGreetInterface $greet)
    {
        $this->greet = $greet;
    }

    /**
     * {@inheritDoc}
     */
    public function greet(string $name): void
    {
        $guest = new Guest($name);
        if (!$guest->validate()) {
            // display errors
        }
        $this->greet->display($guest->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function greetInJapanese(): void
    {
        $this->greet->echoInJapanese();
    }
}
