<?php

declare(strict_types=1);

namespace Marktic\Partners\Tests\Sponsors;

use Marktic\Partners\Sponsors\Models\Sponsor;
use Marktic\Partners\Tests\TestCase;

/**
 * Class SponsorTest
 */
class SponsorTest extends TestCase
{
    public function test_sponsor_can_be_instantiated(): void
    {
        $sponsor = new Sponsor();
        self::assertInstanceOf(Sponsor::class, $sponsor);
    }

    public function test_sponsor_has_expected_class_name(): void
    {
        self::assertEquals('Sponsor', (new Sponsor())->getClassName());
    }
}
