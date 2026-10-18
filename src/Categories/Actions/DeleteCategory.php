<?php

declare(strict_types=1);

namespace Marktic\Partners\Categories\Actions;

use Marktic\Partners\Categories\Models\Category;

/**
 * Class DeletePartnerCategory
 *
 * @package Marktic\Partners\Categories\Actions
 */
class DeletePartnerCategory
{
    public function handle(Category $category): void
    {
        $category->delete();
    }
}
