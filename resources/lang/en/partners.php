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
    'mkt_partners-partners' => [
        'labels' => [
            'title' => 'Partners',
            'title.singular' => 'Partner',
            'add' => 'Add partner',
        ],
    ],
    'mkt_partners-categories' => [
        'labels' => [
            'title' => 'Partner Categories',
            'title.singular' => 'Partner Category',
            'add' => 'Add category',
        ],
    ],
    'mkt_partners-sites' => [
        'labels' => [
            'title' => 'Partner Sites',
            'title.singular' => 'Partner Site',
            'add' => 'Add site',
        ],
    ],
    'mkt_partners-site-items' => [
        'labels' => [
            'title' => 'Partner Site Items',
            'title.singular' => 'Partner Site Item',
            'add' => 'Add site item',
        ],
    ],
];
