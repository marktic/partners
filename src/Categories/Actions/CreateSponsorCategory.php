<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Actions;

use Marktic\Partners\SponsorCategories\Dto\CreateSponsorCategoryDto;
use Marktic\Partners\SponsorCategories\Models\SponsorCategory;
use Marktic\Partners\Utility\PartnersModels;

/**
 * Class CreateSponsorCategory
 *
 * @package Marktic\Partners\SponsorCategories\Actions
 */
class CreateSponsorCategory
{
    public function handle(CreateSponsorCategoryDto $dto): SponsorCategory
    {
        $categories = PartnersModels::sponsorCategories();

        /** @var SponsorCategory $category */
        $category = $categories->getNew();
        $category->name = $dto->name;
        $category->save();

        return $category;
    }
}
