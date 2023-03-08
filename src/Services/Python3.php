<?php

namespace diaeai\LaravelPython3\Services;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class Python3
{
    public function run(string $filename, array $parameters = [], string $path = null)
    {
        $process = new Process(array_merge([config('python3.interpreter'), $filename], $parameters), $path);
        $process->run();
        $process->wait();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return rtrim($process->getOutput(), "\n");
    }
}
