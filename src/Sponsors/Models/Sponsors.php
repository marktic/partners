<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Models;

use Marktic\Partners\AbstractBase\Models\PartnersRepository;
use Marktic\Partners\Utility\PackageConfig;

/**
 * Class Sponsors
 *
 * @package Marktic\Partners\Sponsors\Models
 */
class Sponsors extends PartnersRepository
{
    public const TABLE = 'mkt_partners_sponsors';
    public const CONTROLLER = 'mkt_partners-sponsors';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
