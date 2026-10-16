<?php

declare(strict_types=1);

namespace Marktic\Partners\Tests\SponsorCategories;

use Marktic\Partners\SponsorCategories\Models\SponsorCategory;
use Marktic\Partners\Tests\TestCase;

/**
 * Class SponsorCategoryTest
 */
class SponsorCategoryTest extends TestCase
{
    public function test_category_can_be_instantiated(): void
    {
        $category = new SponsorCategory();
        self::assertInstanceOf(SponsorCategory::class, $category);
    }

    public function test_category_has_expected_class_name(): void
    {
        self::assertEquals('SponsorCategory', (new SponsorCategory())->getClassName());
    }
}
