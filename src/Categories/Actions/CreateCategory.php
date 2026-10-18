<?php

declare(strict_types=1);

namespace Marktic\Partners\Categories\Actions;

use Marktic\Partners\Categories\Models\Category;
use Marktic\Partners\Utility\PartnersModels;

/**
 * Class CreateCategory
 *
 * @package Marktic\Partners\Categories\Actions
 */
class CreateCategory
{
    public function handle(string $name): Category
    {
        $categories = PartnersModels::categories();

        /** @var Category $category */
        $category = $categories->getNew();
        $category->name = $name;
        $category->save();

        return $category;
    }
}
