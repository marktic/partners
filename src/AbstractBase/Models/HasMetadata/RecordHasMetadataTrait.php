<?php

declare(strict_types=1);

namespace Marktic\Partners\AbstractBase\Models\HasMetadata;

use ByTIC\DataObjects\Casts\Metadata\AsMetadataObject;
use ByTIC\DataObjects\Casts\Metadata\Metadata;

/**
 * @property Metadata $metadata
 */
trait RecordHasMetadataTrait
{
    public function bootRecordHasMetadataTrait(): void
    {
        $class = $this->getMetadataClass();

        $this->addCast(
            'metadata',
            AsMetadataObject::class . ':json'
            . ($class ? ',' . $class : null)
        );
    }

    protected function getMetadataClass(): ?string
    {
        return null;
    }

    public function getMetadataValue(string $key, mixed $default = null): mixed
    {
        return $this->metadata->get($key, $default);
    }

    public function getMetadata(): Metadata
    {
        return $this->getPropertyValue('metadata');
    }

    public function setMetadataValue(string $key, mixed $value): void
    {
        $this->metadata->set($key, $value);
    }
}
