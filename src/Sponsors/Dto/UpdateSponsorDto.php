<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Dto;

/**
 * Class UpdateSponsorDto
 *
 * @package Marktic\Partners\Sponsors\Dto
 */
class UpdateSponsorDto
{
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?int $idSponsorCategory = null,
        public readonly ?array $metadata = null,
    ) {
    }
}
