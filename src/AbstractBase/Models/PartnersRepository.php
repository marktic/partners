<?php

declare(strict_types=1);

namespace Marktic\Partners\AbstractBase\Models;

use Marktic\Partners\AbstractBase\Models\Traits\BaseRepositoryTrait;
use Nip\Records\RecordManager;

class PartnersRepository extends RecordManager
{
    use BaseRepositoryTrait;
}
