<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePartnersCategoriesTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('mkt_partners_categories', [
            'id' => false,
            'primary_key' => 'id',
        ]);

        $table->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('name', 'string', ['limit' => 255])
            ->addTimestamps()
            ->create();
    }
}
