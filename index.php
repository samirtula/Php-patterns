<?php

declare(strict_types=1);

use Patterns\Creative\Factory\WorkerFactory;
use Patterns\Creative\Factory\Worker;
use Patterns\Creative\Singleton;

require('./vendor/autoload.php');


$worker = WorkerFactory::make('Turan');
echo $worker->getName();
