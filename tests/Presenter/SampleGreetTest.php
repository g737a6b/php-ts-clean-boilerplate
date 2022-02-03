<?php

use PHPUnit\Framework\TestCase;
use App\Presenter\SampleGreet;

final class SampleGreetTest extends TestCase
{
    public function testEchoInJapanese(): void
    {
        $sample = new SampleGreet(new stdClass());
        $this->expectOutputString("こんにちは\n");
        $sample->echoInJapanese();
    }
}
