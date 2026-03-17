<?php

declare(strict_types=1);

namespace Marktic\Partners\AbstractBase\Models\Traits;

use ByTIC\Records\Behaviors\HasForms\HasFormsRecordsTrait;
use Marktic\Partners\AbstractBase\Models\Timestampable\TimestampableManagerTrait;

trait BaseRepositoryTrait
{
    use HasFormsRecordsTrait;
    use TimestampableManagerTrait;
    use HasDatabaseConnectionTrait;

    protected function initRelations(): void
    {
        parent::initRelations();

        $this->initRelationsPartners();
    }

    protected function initRelationsPartners(): void
    {
    }

    protected function generateController(): string
    {
        if (\defined('static::CONTROLLER')) {
            return static::CONTROLLER;
        }

        return $this->getTable();
    }
}
