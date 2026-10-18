<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Controllers\Admin;

use Nip\Controllers\Response\ResponsePayload;

/**
 * @method ResponsePayload payload()
 */
trait PartnersControllerTrait
{
    protected function indexPrepareItems($items)
    {
        parent::indexPrepareItems($items);
        $items->loadRelation('category');
    }
}
