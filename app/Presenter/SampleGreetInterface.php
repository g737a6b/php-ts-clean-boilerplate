<?php

namespace App\Presenter;

interface SampleGreetInterface
{
    function __construct(object $template);

    /**
     * 挨拶画面を描画します
     *
     * @param string $name
     * @return void
     */
    public function display(string $name): void;

    /**
     * 日本語で挨拶を表示します
     *
     * @return void
     */
    public function echoInJapanese(): void;
}
