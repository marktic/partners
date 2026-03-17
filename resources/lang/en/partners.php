<?php

return [
    'sponsor' => [
        'singular' => 'Sponsor',
        'plural' => 'Sponsors',
        'fields' => [
            'id' => 'ID',
            'uuid' => 'UUID',
            'name' => 'Name',
            'metadata' => 'Metadata',
            'id_sponsor_category' => 'Category',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
    ],
    'sponsor_category' => [
        'singular' => 'Sponsor Category',
        'plural' => 'Sponsor Categories',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
    ],
];
