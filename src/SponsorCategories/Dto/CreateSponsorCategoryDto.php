<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Dto;

/**
 * Class CreateSponsorCategoryDto
 *
 * @package Marktic\Partners\SponsorCategories\Dto
 */
class CreateSponsorCategoryDto
{
    public function __construct(
        public readonly string $name,
    ) {
    }
}
