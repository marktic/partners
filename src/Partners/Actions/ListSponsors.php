<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Actions;

use Marktic\Partners\Sponsors\Models\Sponsors;
use Marktic\Partners\Utility\PartnersModels;
use Nip\Records\Collections\Collection;

/**
 * Class ListSponsors
 *
 * @package Marktic\Partners\Sponsors\Actions
 */
class ListSponsors
{
    /**
     * @param int|null $categoryId Filter by sponsor category
     * @return Collection
     */
    public function handle(?int $categoryId = null): Collection
    {
        /** @var Sponsors $sponsors */
        $sponsors = PartnersModels::sponsors();
        $query = $sponsors->newQuery();

        if ($categoryId !== null) {
            $query->where('id_sponsor_category = ?', $categoryId);
        }

        return $query->get();
    }
}
