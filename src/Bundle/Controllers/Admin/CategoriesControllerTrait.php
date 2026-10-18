<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Controllers\Admin;

use Marktic\Partners\Bundle\Forms\Admin\Categories\DetailsForm;

trait CategoriesControllerTrait
{
    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
