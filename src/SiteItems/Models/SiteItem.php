<?php

declare(strict_types=1);

namespace Marktic\Partners\SiteItems\Models;

use Marktic\Partners\AbstractBase\Models\PartnersRecord;

/**
 * Class SiteItem
 *
 * @package Marktic\Partners\SiteItems\Models
 *
 * @property int    $id
 * @property int    $id_partner
 * @property int    $id_site
 * @property int    $id_category
 * @property string $label
 */
class SiteItem extends PartnersRecord
{
}
