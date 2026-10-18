<?php

declare(strict_types=1);

namespace Marktic\Partners\Tests\Partners;

use Marktic\Partners\Partners\Models\Partner;
use Marktic\Partners\Tests\TestCase;

/**
 * Class PartnerTest
 */
class PartnerTest extends TestCase
{
    public function test_partner_can_be_instantiated(): void
    {
        $partner = new Partner();
        self::assertInstanceOf(Partner::class, $partner);
    }

    public function test_partner_has_expected_class_name(): void
    {
        self::assertEquals('Partner', (new Partner())->getClassName());
    }
}
