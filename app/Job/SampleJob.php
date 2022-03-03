<?php

namespace App\Job;

use App\UseCase\SampleInterface;

class SampleJob implements JobInterface
{
    protected $sample;

    function __construct(SampleInterface $sample)
    {
        $this->sample = $sample;
    }

    public function main(): void
    {
        $this->sample->greetInJapanese();
    }
}
