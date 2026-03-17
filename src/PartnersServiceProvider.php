<?php

declare(strict_types=1);

namespace Marktic\Partners;

use ByTIC\PackageBase\BaseBootableServiceProvider;
use Marktic\Partners\Utility\PackageConfig;

/**
 * Class PartnersServiceProvider.
 */
class PartnersServiceProvider extends BaseBootableServiceProvider
{
    public const NAME = 'mkt_partners';

    public function migrations(): ?string
    {
        if (PackageConfig::shouldRunMigrations()) {
            return dirname(__DIR__) . '/database/migrations/';
        }

        return null;
    }

    protected function translationsPath(): string
    {
        return dirname(__DIR__) . '/resources/lang/';
    }

    protected function registerCommands(): void
    {
    }

    public function boot(): void
    {
        parent::boot();
    }
}
