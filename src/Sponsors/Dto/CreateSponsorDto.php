<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Dto;

/**
 * Class CreateSponsorDto
 *
 * @package Marktic\Partners\Sponsors\Dto
 */
class CreateSponsorDto
{
    public function __construct(
        public readonly string $name,
        public readonly ?string $label = null,
        public readonly ?string $url = null,
        public readonly ?int $idSponsorCategory = null,
        public readonly array $metadata = [],
    ) {
    }
}
