<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Events;

use Marktic\Partners\Sponsors\Models\Sponsor;

/**
 * Class SponsorDeletedEvent
 *
 * @package Marktic\Partners\Sponsors\Events
 */
class SponsorDeletedEvent
{
    public function __construct(
        public readonly Sponsor $sponsor,
    ) {
    }
}
