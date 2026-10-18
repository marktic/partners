<?php

declare(strict_types=1);

namespace Marktic\Partners\Categories\Models;

use Marktic\Partners\AbstractBase\Models\PartnersRepository;
use Marktic\Partners\Utility\PackageConfig;

/**
 * Class Categories
 *
 * @package Marktic\Partners\Categories\Models
 */
class Categories extends PartnersRepository
{
    public const TABLE = 'mkt_partners_categories';
    public const CONTROLLER = 'mkt_partners-categories';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
