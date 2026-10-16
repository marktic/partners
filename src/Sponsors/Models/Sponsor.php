<?php

declare(strict_types=1);

namespace Marktic\Partners\Sponsors\Models;

use Marktic\Partners\AbstractBase\Models\HasMetadata\RecordHasMetadataTrait;
use Marktic\Partners\AbstractBase\Models\PartnersRecord;

/**
 * Class Sponsor
 *
 * @package Marktic\Partners\Sponsors\Models
 *
 * @property int    $id
 * @property string $uuid
 * @property string $name
 * @property int    $id_sponsor_category
 * @property array  $metadata
 */
class Sponsor extends PartnersRecord
{
    use RecordHasMetadataTrait;
}
