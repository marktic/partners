<?php

declare(strict_types=1);

namespace Marktic\Partners\Partners\Actions;

use Marktic\Partners\Partners\Models\Partner;
use Marktic\Partners\Utility\PartnersModels;

/**
 * Class CreatePartner
 *
 * @package Marktic\Partners\Partners\Actions
 */
class CreatePartner
{
    public function handle(
        string $name,
        ?string $label = null,
        ?string $url = null,
        ?int $idCategory = null,
        array $metadata = [],
    ): Partner {
        $partners = PartnersModels::partners();

        /** @var Partner $partner */
        $partner = $partners->getNew();
        $partner->uuid = $this->generateUuid();
        $partner->name = $name;

        if ($label !== null) {
            $partner->label = $label;
        }

        if ($url !== null) {
            $partner->url = $url;
        }

        if ($idCategory !== null) {
            $partner->id_category = $idCategory;
        }

        foreach ($metadata as $key => $value) {
            $partner->setMetadataValue($key, $value);
        }

        $partner->save();

        return $partner;
    }

    private function generateUuid(): string
    {
        $data = random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
