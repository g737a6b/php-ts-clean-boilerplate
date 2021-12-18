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
     * 何もせず終了します
     *
     * @return void
     */
    public function exit(): void;
}
