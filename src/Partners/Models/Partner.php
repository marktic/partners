<?php

declare(strict_types=1);

namespace Marktic\Partners\Partners\Models;

use Marktic\Partners\AbstractBase\Models\HasMetadata\RecordHasMetadataTrait;
use Marktic\Partners\AbstractBase\Models\PartnersRecord;

/**
 * Class Partner
 *
 * @package Marktic\Partners\Partners\Models
 *
 * @property int    $id
 * @property string $uuid
 * @property string $name
 * @property string|null $label
 * @property string|null $url
 * @property int    $id_category
 * @property array  $metadata
 */
class Partner extends PartnersRecord
{
    use RecordHasMetadataTrait;
}
