<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Controllers\Admin;

use Marktic\Partners\Bundle\Forms\Admin\Partners\DetailsForm;
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

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
