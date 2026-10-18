<?php

declare(strict_types=1);

namespace Marktic\Partners\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\Partners\PartnersServiceProvider;
use Marktic\Partners\Categories\Models\Categories;
use Marktic\Partners\Partners\Models\Partners;
use Nip\Records\RecordManager;

/**
 * Class PartnersModels
 */
class PartnersModels extends ModelFinder
{
    public const PARTNERS = 'partners';
    public const CATEGORIES = 'categories';

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

    protected static function packageName(): string
    {
        return PartnersServiceProvider::NAME;
    }
}
