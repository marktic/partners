<?php

use Marktic\Partners\SponsorCategories\Models\SponsorCategories;
use Marktic\Partners\Sponsors\Models\Sponsors;
use Marktic\Partners\Utility\PartnersModels;

return [
    'models' => [
        PartnersModels::SPONSORS => Sponsors::class,
        PartnersModels::SPONSOR_CATEGORIES => SponsorCategories::class,
    ],
    'tables' => [
        PartnersModels::SPONSORS => Sponsors::TABLE,
        PartnersModels::SPONSOR_CATEGORIES => SponsorCategories::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => false,
    ],
];
