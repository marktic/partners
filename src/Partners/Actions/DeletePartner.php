<?php

declare(strict_types=1);

namespace Marktic\Partners\Partners\Actions;

use Marktic\Partners\Partners\Models\Partner;

/**
 * Class DeletePartner
 *
 * @package Marktic\Partners\Partners\Actions
 */
class DeletePartner
{
    public function handle(Partner $partner): void
    {
        $partner->delete();
    }
}
