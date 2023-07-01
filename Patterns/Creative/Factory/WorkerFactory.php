<?php

declare(strict_types=1);

namespace Patterns\Creative\Factory;

class WorkerFactory
{
    public static function make(string $workerName): Worker
    {
        return new Worker($workerName);
    }
}