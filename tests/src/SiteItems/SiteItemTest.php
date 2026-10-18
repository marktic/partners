<?php

declare(strict_types=1);

namespace Marktic\Partners\Tests\SiteItems;

use Marktic\Partners\SiteItems\Models\SiteItem;
use Marktic\Partners\Tests\TestCase;

class SiteItemTest extends TestCase
{
    public function test_site_item_can_be_instantiated(): void
    {
        $siteItem = new SiteItem();
        self::assertInstanceOf(SiteItem::class, $siteItem);
    }

    public function test_site_item_has_expected_class_name(): void
    {
        self::assertEquals('SiteItem', (new SiteItem())->getClassName());
    }
}
