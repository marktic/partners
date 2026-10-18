<?php

use Marktic\Partners\Categories\Models\Categories;
use Marktic\Partners\Partners\Models\Partners;
use Marktic\Partners\Utility\PartnersModels;

return [
    'models' => [
        PartnersModels::PARTNERS => Partners::class,
        PartnersModels::CATEGORIES => Categories::class,
    ],
    'tables' => [
        PartnersModels::PARTNERS => Partners::TABLE,
        PartnersModels::CATEGORIES => Categories::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => false,
    ],
];
