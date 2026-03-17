<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Events;

use Marktic\Partners\SponsorCategories\Models\SponsorCategory;

/**
 * Class SponsorCategoryCreatedEvent
 *
 * @package Marktic\Partners\SponsorCategories\Events
 */
class SponsorCategoryCreatedEvent
{
    public function __construct(
        public readonly SponsorCategory $category,
    ) {
    }
}
