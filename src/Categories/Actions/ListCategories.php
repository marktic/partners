<?php

declare(strict_types=1);

namespace Marktic\Partners\Categories\Actions;

use Marktic\Partners\Utility\PartnersModels;
use Nip\Records\Collections\Collection;

/**
 * Class ListCategories
 *
 * @package Marktic\Partners\Categories\Actions
 */
class ListCategories
{
    /**
     * @return Collection
     */
    public function handle(): Collection
    {
        return PartnersModels::categories()->newQuery()->get();
    }
}
