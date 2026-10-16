<?php

declare(strict_types=1);

namespace Marktic\Partners\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\Partners\PartnersServiceProvider;
use Marktic\Partners\SponsorCategories\Models\SponsorCategories;
use Marktic\Partners\Sponsors\Models\Sponsors;
use Nip\Records\RecordManager;

/**
 * Class PartnersModels
 */
class PartnersModels extends ModelFinder
{
    public const SPONSORS = 'sponsors';
    public const SPONSOR_CATEGORIES = 'sponsor_categories';

    /**
     * @return Sponsors|RecordManager
     */
    public static function sponsors(): Sponsors|RecordManager
    {
        return static::getModels(self::SPONSORS, Sponsors::class);
    }

    public static function sponsorsClass(): string
    {
        return static::getModelsClass(self::SPONSORS, Sponsors::class);
    }

    public static function sponsorsTable(): string
    {
        return static::getTable(self::SPONSORS, Sponsors::class);
    }

    /**
     * @return SponsorCategories|RecordManager
     */
    public static function sponsorCategories(): SponsorCategories|RecordManager
    {
        return static::getModels(self::SPONSOR_CATEGORIES, SponsorCategories::class);
    }

    public static function sponsorCategoriesClass(): string
    {
        return static::getModelsClass(self::SPONSOR_CATEGORIES, SponsorCategories::class);
    }

    public static function sponsorCategoriesTable(): string
    {
        return static::getTable(self::SPONSOR_CATEGORIES, SponsorCategories::class);
    }

    protected static function packageName(): string
    {
        return PartnersServiceProvider::NAME;
    }
}
