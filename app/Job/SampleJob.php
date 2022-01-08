<?php

namespace App\Job;

use App\UseCase\SampleInterface;

class SampleJob implements JobInterface
{
    private $sample;

    function __construct(SampleInterface $sample)
    {
        $this->sample = $sample;
    }

    public function main(): void
    {
        $this->sample->greetInJapanese();
    }
}
