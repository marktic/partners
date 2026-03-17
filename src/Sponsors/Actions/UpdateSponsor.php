<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Actions;

use Marktic\Partners\Sponsors\Dto\UpdateSponsorDto;
use Marktic\Partners\Sponsors\Models\Sponsor;

/**
 * Class UpdateSponsor
 *
 * @package Marktic\Partners\Sponsors\Actions
 */
class UpdateSponsor
{
    public function handle(Sponsor $sponsor, UpdateSponsorDto $dto): Sponsor
    {
        if ($dto->name !== null) {
            $sponsor->name = $dto->name;
        }

        if ($dto->idSponsorCategory !== null) {
            $sponsor->id_sponsor_category = $dto->idSponsorCategory;
        }

        if ($dto->metadata !== null) {
            foreach ($dto->metadata as $key => $value) {
                $sponsor->setMetadataValue($key, $value);
            }
        }

        $sponsor->save();

        return $sponsor;
    }
}
