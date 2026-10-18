<?php

declare(strict_types=1);

namespace Marktic\Partners\Partners\Actions;

use Marktic\Partners\Partners\Models\Partner;

/**
 * Class UpdatePartner
 *
 * @package Marktic\Partners\Partners\Actions
 */
class UpdatePartner
{
    public function handle(
        Partner $partner,
        ?string $name = null,
        ?string $label = null,
        ?string $url = null,
        ?int $idCategory = null,
        ?array $metadata = null,
    ): Partner {
        if ($name !== null) {
            $partner->name = $name;
        }

        if ($label !== null) {
            $partner->label = $label;
        }

        if ($url !== null) {
            $partner->url = $url;
        }

        if ($idCategory !== null) {
            $partner->id_category = $idCategory;
        }

        if ($metadata !== null) {
            foreach ($metadata as $key => $value) {
                $partner->setMetadataValue($key, $value);
            }
        }

        $partner->save();

        return $partner;
    }
}
