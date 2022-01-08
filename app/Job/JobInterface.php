<?php

namespace App\Job;

interface JobInterface
{
    public function main(): void;
}
