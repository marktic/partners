<?php

declare(strict_types=1);

namespace Marktic\Partners\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\Partners\PartnersServiceProvider;
use Marktic\Partners\Categories\Models\Categories;
use Marktic\Partners\Partners\Models\Partners;
use Marktic\Partners\SiteItems\Models\SiteItems;
use Marktic\Partners\Sites\Models\Sites;
use Nip\Records\RecordManager;

/**
 * Class PartnersModels
 */
class PartnersModels extends ModelFinder
{
    public const PARTNERS = 'partners';
    public const CATEGORIES = 'categories';
    public const SITES = 'sites';
    public const SITE_ITEMS = 'site_items';

    /**
     * @return Partners|RecordManager
     */
    public static function partners(): Partners|RecordManager
    {
        return static::getModels(self::PARTNERS, Partners::class);
    }

    public static function partnersClass(): string
    {
        return static::getModelsClass(self::PARTNERS, Partners::class);
    }

    public static function partnersTable(): string
    {
        return static::getTable(self::PARTNERS, Partners::class);
    }

    /**
     * @return Categories|RecordManager
     */
    public static function categories(): Categories|RecordManager
    {
        return static::getModels(self::CATEGORIES, Categories::class);
    }

    public static function categoriesClass(): string
    {
        return static::getModelsClass(self::CATEGORIES, Categories::class);
    }

    public static function categoriesTable(): string
    {
        return static::getTable(self::CATEGORIES, Categories::class);
    }

    /**
     * @return Sites|RecordManager
     */
    public static function sites(): Sites|RecordManager
    {
        return static::getModels(self::SITES, Sites::class);
    }

    public static function sitesClass(): string
    {
        return static::getModelsClass(self::SITES, Sites::class);
    }

    public static function sitesTable(): string
    {
        return static::getTable(self::SITES, Sites::class);
    }

    /**
     * @return SiteItems|RecordManager
     */
    public static function siteItems(): SiteItems|RecordManager
    {
        return static::getModels(self::SITE_ITEMS, SiteItems::class);
    }

    public static function siteItemsClass(): string
    {
        return static::getModelsClass(self::SITE_ITEMS, SiteItems::class);
    }

    public static function siteItemsTable(): string
    {
        return static::getTable(self::SITE_ITEMS, SiteItems::class);
    }

    protected static function packageName(): string
    {
        return PartnersServiceProvider::NAME;
    }
}
