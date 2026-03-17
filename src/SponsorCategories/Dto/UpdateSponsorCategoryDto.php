<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Dto;

/**
 * Class UpdateSponsorCategoryDto
 *
 * @package Marktic\Partners\SponsorCategories\Dto
 */
class UpdateSponsorCategoryDto
{
    public function __construct(
        public readonly ?string $name = null,
    ) {
    }
}
