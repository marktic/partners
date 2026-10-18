<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Controllers\Frontend;

use Nip\Controllers\Response\ResponsePayload;

/**
 * @method ResponsePayload payload()
 */
trait PartnersControllerTrait
{
    public function index()
    {
        $items = $this->getRepository()->newQuery()->orderBy('name')->all();
        $this->payload()->set('items', $items);
        $this->payload()->setView('index');

        return $this->payload();
    }
}
