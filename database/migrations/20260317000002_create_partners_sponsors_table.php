<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePartnersSponsorsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('mkt_partners_sponsors', [
            'id' => false,
            'primary_key' => 'id',
        ]);

        $table->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('uuid', 'string', ['limit' => 36])
            ->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('id_sponsor_category', 'biginteger', ['signed' => false, 'null' => true, 'default' => null])
            ->addColumn('metadata', 'text', ['null' => true, 'default' => null])
            ->addTimestamps()
            ->addIndex(['uuid'], ['unique' => true, 'name' => 'sponsors_uuid_unique'])
            ->addIndex(['id_sponsor_category'])
            ->create();
    }
}
