<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePartnersPartnersTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('mkt_partners_partners', [
            'id' => false,
            'primary_key' => 'id',
        ]);

        $table->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('uuid', 'string', ['limit' => 36])
            ->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('label', 'string', ['limit' => 255, 'null' => true, 'default' => null])
            ->addColumn('url', 'string', ['limit' => 2048, 'null' => true, 'default' => null])
            ->addColumn('id_category', 'biginteger', ['signed' => false, 'null' => true, 'default' => null])
            ->addColumn('metadata', 'text', ['null' => true, 'default' => null])
            ->addTimestamps()
            ->addIndex(['uuid'], ['unique' => true, 'name' => 'partners_uuid_unique'])
            ->addIndex(['id_category'])
            ->create();
    }
}
