<?php

namespace MusicBrainz\Relation\Type\Url\Work;

use MusicBrainz\Relation\Type\Url\Work;
use MusicBrainz\Value\Name;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @link https://musicbrainz.org/relationship/07ae9b01-c09a-4460-8693-85479c1e96c3
 */
abstract class OnlineData extends Work
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('online data');
    }
}
