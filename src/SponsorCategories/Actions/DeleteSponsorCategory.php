<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Actions;

use Marktic\Partners\SponsorCategories\Models\SponsorCategory;

/**
 * Class DeleteSponsorCategory
 *
 * @package Marktic\Partners\SponsorCategories\Actions
 */
class DeleteSponsorCategory
{
    public function handle(SponsorCategory $category): void
    {
        $category->delete();
    }
}
