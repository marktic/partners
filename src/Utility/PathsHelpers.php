<?php

declare(strict_types=1);

namespace Marktic\Partners\Utility;

/**
 * Class PathsHelpers.
 */
class PathsHelpers
{
    public static function rootPath(): string
    {
        return dirname(__DIR__, 2);
    }

    public static function configPath(): string
    {
        return static::rootPath() . '/config';
    }

    public static function databasePath(): string
    {
        return static::rootPath() . '/database';
    }

    public static function migrationsPath(): string
    {
        return static::databasePath() . '/migrations';
    }
}
