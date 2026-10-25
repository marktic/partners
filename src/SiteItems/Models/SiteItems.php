<?php

declare(strict_types=1);

namespace Marktic\Partners\SiteItems\Models;

use Marktic\Partners\AbstractBase\Models\PartnersRepository;
use Marktic\Partners\Utility\PackageConfig;

/**
 * Class SiteItems
 *
 * @package Marktic\Partners\SiteItems\Models
 */
class SiteItems extends PartnersRepository
{
    public const TABLE = 'mkt_partners_site_items';
    public const CONTROLLER = 'mkt_partners-site-items';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
