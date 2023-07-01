<?php

declare(strict_types=1);

namespace Patterns\Creative;

final class Singleton
{
    private static ?self $instance = null;

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            return new self();
        }

        return self::$instance;
    }

    public function __clone(): void
    {
    }

    public function __wakeup(): void
    {
    }
}
