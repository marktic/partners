<?php

declare(strict_types=1);

namespace Marktic\Partners\Partners\Actions;

use Marktic\Partners\Partners\Models\Partners;
use Marktic\Partners\Utility\PartnersModels;
use Nip\Records\Collections\Collection;

/**
 * Class ListPartners
 *
 * @package Marktic\Partners\Partners\Actions
 */
class ListPartners
{
    /**
     * @param int|null $categoryId Filter by partner category
     * @return Collection
     */
    public function handle(?int $categoryId = null): Collection
    {
        /** @var Partners $partners */
        $partners = PartnersModels::partners();
        $query = $partners->newQuery();

        if ($categoryId !== null) {
            $query->where('id_category = ?', $categoryId);
        }

        return $query->get();
    }
}
