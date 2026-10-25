<?php

declare(strict_types=1);

namespace Marktic\Partners\Sites\Models;

use Marktic\Partners\AbstractBase\Models\PartnersRepository;
use Marktic\Partners\Utility\PackageConfig;

/**
 * Class Sites
 *
 * @package Marktic\Partners\Sites\Models
 */
class Sites extends PartnersRepository
{
    public const TABLE = 'mkt_partners_sites';
    public const CONTROLLER = 'mkt_partners-sites';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
