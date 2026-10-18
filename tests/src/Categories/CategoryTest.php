<?php

declare(strict_types=1);

namespace Marktic\Partners\Tests\Categories;

use Marktic\Partners\Categories\Models\Category;
use Marktic\Partners\Tests\TestCase;

/**
 * Class CategoryTest
 */
class CategoryTest extends TestCase
{
    public function test_category_can_be_instantiated(): void
    {
        $category = new Category();
        self::assertInstanceOf(Category::class, $category);
    }

    public function test_category_has_expected_class_name(): void
    {
        self::assertEquals('Category', (new Category())->getClassName());
    }
}
