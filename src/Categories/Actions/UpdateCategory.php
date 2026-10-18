<?php

declare(strict_types=1);

namespace Marktic\Partners\Categories\Actions;

use Marktic\Partners\Categories\Models\Category;

/**
 * Class UpdateCategory
 *
 * @package Marktic\Partners\Categories\Actions
 */
class UpdateCategory
{
    public function handle(Category $category, ?string $name = null): Category
    {
        if ($name !== null) {
            $category->name = $name;
        }

        $category->save();

        return $category;
    }
}
