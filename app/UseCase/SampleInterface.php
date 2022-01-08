<?php

namespace App\UseCase;

use App\Presenter\SampleGreetInterface;

interface SampleInterface
{
    function __construct(SampleGreetInterface $greet);

    /**
     * 挨拶を行います
     *
     * @param string $name
     * @return void
     */
    public function greet(string $name): void;

    /**
     * 日本語で挨拶を行います
     *
     * @return void
     */
    public function greetInJapanese(): void;
}
