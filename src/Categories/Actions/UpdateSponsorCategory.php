<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Actions;

use Marktic\Partners\SponsorCategories\Dto\UpdateSponsorCategoryDto;
use Marktic\Partners\SponsorCategories\Models\SponsorCategory;

/**
 * Class UpdateSponsorCategory
 *
 * @package Marktic\Partners\SponsorCategories\Actions
 */
class UpdateSponsorCategory
{
    public function handle(SponsorCategory $category, UpdateSponsorCategoryDto $dto): SponsorCategory
    {
        if ($dto->name !== null) {
            $category->name = $dto->name;
        }

        $category->save();

        return $category;
    }
}
