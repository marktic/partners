<?php

declare(strict_types=1);

namespace Marktic\Partners\Partners\Models;

use Marktic\Partners\AbstractBase\Models\PartnersRepository;
use Marktic\Partners\Utility\PackageConfig;

/**
 * Class Partners
 *
 * @package Marktic\Partners\Partners\Models
 */
class Partners extends PartnersRepository
{
    public const TABLE = 'mkt_partners_partners';
    public const CONTROLLER = 'mkt_partners-partners';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
