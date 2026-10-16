<?php

declare(strict_types=1);

namespace Marktic\Partners\Tests;

use Bytic\Phpqa\PHPUnit\TestCase as ByticTestCase;
use Marktic\Partners\PartnersServiceProvider;
use Nip\Config\Config;
use Nip\Container\Container;

/**
 * Class TestCase
 */
abstract class TestCase extends ByticTestCase
{
    protected function loadConfig(array $data = []): void
    {
        $config = config();
        $configNew = new Config([PartnersServiceProvider::NAME => $data], true);
        Container::getInstance()->set('config', $config->merge($configNew));
    }

    protected function loadConfigFromFixture(string $name): void
    {
        $config = require TEST_FIXTURE_PATH . '/config/' . $name . '.php';
        $this->loadConfig($config);
    }
}
