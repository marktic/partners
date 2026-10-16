<?php

declare(strict_types=1);

namespace Marktic\Partners\SponsorCategories\Actions;

use Marktic\Partners\Utility\PartnersModels;
use Nip\Records\Collections\Collection;

/**
 * Class ListSponsorCategories
 *
 * @package Marktic\Partners\SponsorCategories\Actions
 */
class ListSponsorCategories
{
    /**
     * @return Collection
     */
    public function handle(): Collection
    {
        return PartnersModels::sponsorCategories()->newQuery()->get();
    }
}
