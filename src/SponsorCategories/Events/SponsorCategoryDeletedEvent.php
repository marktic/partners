<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Events;

use Marktic\Partners\SponsorCategories\Models\SponsorCategory;

/**
 * Class SponsorCategoryDeletedEvent
 *
 * @package Marktic\Partners\SponsorCategories\Events
 */
class SponsorCategoryDeletedEvent
{
    public function __construct(
        public readonly SponsorCategory $category,
    ) {
    }
}
