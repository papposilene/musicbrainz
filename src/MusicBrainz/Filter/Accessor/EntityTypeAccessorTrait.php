<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\EntityType;

/**
 * Provides accessors for the entity type.
 */
trait EntityTypeAccessorTrait
{
    /**
     * The entity type
     *
     * @var EntityType
     */
    private $entityType;

    /**
     * Returns the entity type
     *
     * @return EntityType
     */
    public function getEntityType(): EntityType
    {
        return $this->entityType;
    }

    /**
     * Sets the entity type
     *
     * @param EntityType $entityType The entity type
     *
     * @return self
     */
    public function setEntityType(EntityType $entityType): self
    {
        $this->entityType = $entityType;

        return $this;
    }
}
