<?php

return [
    'partner' => [
        'singular' => 'Partner',
        'plural' => 'Partners',
        'fields' => [
            'id' => 'ID',
            'uuid' => 'UUID',
            'name' => 'Name',
            'metadata' => 'Metadata',
            'id_category' => 'Category',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
    ],
    'site' => [
        'singular' => 'Site',
        'plural' => 'Sites',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
    ],
    'site_item' => [
        'singular' => 'Site Item',
        'plural' => 'Site Items',
        'fields' => [
            'id' => 'ID',
            'id_partner' => 'Partner',
            'id_site' => 'Site',
            'id_category' => 'Category',
            'label' => 'Label',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
    ],
    'partner_category' => [
        'singular' => 'Partner Category',
        'plural' => 'Partner Categories',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'id_site' => 'Site',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
    ],
];
