<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Events;

use Marktic\Partners\Sponsors\Models\Sponsor;

/**
 * Class SponsorCreatedEvent
 *
 * @package Marktic\Partners\Sponsors\Events
 */
class SponsorCreatedEvent
{
    public function __construct(
        public readonly Sponsor $sponsor,
    ) {
    }
}
