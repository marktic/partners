<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Controllers\Admin;

use Marktic\Partners\Bundle\Forms\Admin\SiteItems\DetailsForm;

trait SiteItemsControllerTrait
{
    protected function indexPrepareItems($items)
    {
        parent::indexPrepareItems($items);

        $items->loadRelation('partner');
        $items->loadRelation('site');
        $items->loadRelation('category');

        return $items;
    }

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
