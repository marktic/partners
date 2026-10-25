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
    'mkt_partners-partners.labels.title' => 'Partners',
    'mkt_partners-partners.labels.title.singular' => 'Partner',
    'mkt_partners-partners.labels.add' => 'Add partner',
    'mkt_partners-categories.labels.title' => 'Partner Categories',
    'mkt_partners-categories.labels.title.singular' => 'Partner Category',
    'mkt_partners-categories.labels.add' => 'Add category',
    'mkt_partners-sites.labels.title' => 'Partner Sites',
    'mkt_partners-sites.labels.title.singular' => 'Partner Site',
    'mkt_partners-sites.labels.add' => 'Add site',
    'mkt_partners-site-items.labels.title' => 'Partner Site Items',
    'mkt_partners-site-items.labels.title.singular' => 'Partner Site Item',
    'mkt_partners-site-items.labels.add' => 'Add site item',
];
