<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Events;

use Marktic\Partners\Sponsors\Models\Sponsor;

/**
 * Class SponsorUpdatedEvent
 *
 * @package Marktic\Partners\Sponsors\Events
 */
class SponsorUpdatedEvent
{
    public function __construct(
        public readonly Sponsor $sponsor,
    ) {
    }
}
