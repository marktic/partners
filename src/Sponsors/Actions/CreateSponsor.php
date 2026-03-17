<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Actions;

use Marktic\Partners\Sponsors\Dto\CreateSponsorDto;
use Marktic\Partners\Sponsors\Models\Sponsor;
use Marktic\Partners\Utility\PartnersModels;

/**
 * Class CreateSponsor
 *
 * @package Marktic\Partners\Sponsors\Actions
 */
class CreateSponsor
{
    public function handle(CreateSponsorDto $dto): Sponsor
    {
        $sponsors = PartnersModels::sponsors();

        /** @var Sponsor $sponsor */
        $sponsor = $sponsors->getNew();
        $sponsor->uuid = $this->generateUuid();
        $sponsor->name = $dto->name;

        if ($dto->idSponsorCategory !== null) {
            $sponsor->id_sponsor_category = $dto->idSponsorCategory;
        }

        foreach ($dto->metadata as $key => $value) {
            $sponsor->setMetadataValue($key, $value);
        }

        $sponsor->save();

        return $sponsor;
    }

    private function generateUuid(): string
    {
        $data = random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
