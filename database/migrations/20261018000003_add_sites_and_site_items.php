<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddSitesAndSiteItems extends AbstractMigration
{
    public function change(): void
    {
        $sites = $this->table('mkt_partners_sites', [
            'id' => false,
            'primary_key' => 'id',
        ]);

        $sites->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('name', 'string', ['limit' => 255])
            ->addTimestamps()
            ->create();

        $categories = $this->table('mkt_partners_categories');
        $categories->addColumn('id_site', 'biginteger', ['signed' => false, 'null' => true, 'default' => null])
            ->addIndex(['id_site'])
            ->update();

        $siteItems = $this->table('mkt_partners_site_items', [
            'id' => false,
            'primary_key' => 'id',
        ]);

        $siteItems->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('id_partner', 'biginteger', ['signed' => false])
            ->addColumn('id_site', 'biginteger', ['signed' => false])
            ->addColumn('id_category', 'biginteger', ['signed' => false])
            ->addColumn('label', 'string', ['limit' => 255])
            ->addTimestamps()
            ->addIndex(['id_partner'])
            ->addIndex(['id_site'])
            ->addIndex(['id_category'])
            ->create();
    }
}
