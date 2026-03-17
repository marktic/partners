<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Models;

use Marktic\Partners\AbstractBase\Models\PartnersRepository;
use Marktic\Partners\Utility\PackageConfig;

/**
 * Class SponsorCategories
 *
 * @package Marktic\Partners\SponsorCategories\Models
 */
class SponsorCategories extends PartnersRepository
{
    public const TABLE = 'mkt_partners_sponsor_categories';
    public const CONTROLLER = 'mkt_partners-sponsor-categories';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
