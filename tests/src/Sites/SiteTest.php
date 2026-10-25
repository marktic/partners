<?php

declare(strict_types=1);

namespace Marktic\Partners\Tests\Sites;

use Marktic\Partners\Sites\Models\Site;
use Marktic\Partners\Tests\TestCase;

class SiteTest extends TestCase
{
    public function test_site_can_be_instantiated(): void
    {
        $site = new Site();
        self::assertInstanceOf(Site::class, $site);
    }

    public function test_site_has_expected_class_name(): void
    {
        self::assertEquals('Site', (new Site())->getClassName());
    }
}
