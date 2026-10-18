<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Actions;

use Marktic\Partners\Sponsors\Models\Sponsor;

/**
 * Class DeleteSponsor
 *
 * @package Marktic\Partners\Sponsors\Actions
 */
class DeleteSponsor
{
    public function handle(Sponsor $sponsor): void
    {
        $sponsor->delete();
    }
}
