<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Events;

use Marktic\Partners\SponsorCategories\Models\SponsorCategory;

/**
 * Class SponsorCategoryUpdatedEvent
 *
 * @package Marktic\Partners\SponsorCategories\Events
 */
class SponsorCategoryUpdatedEvent
{
    public function __construct(
        public readonly SponsorCategory $category,
    ) {
    }
}
