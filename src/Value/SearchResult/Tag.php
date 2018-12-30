<?php

namespace MusicBrainz\Value\SearchResult;

use MusicBrainz\Value\Property\TagTrait;
use MusicBrainz\Value\SearchResult;

/**
 * A list of results from the search API
 */
class Tag extends SearchResult
{
    use TagTrait;

    /**
     * Constructs a list of results from the search API.
     *
     * @param array $searchResult A search result from the search API
     */
    public function __construct(array $searchResult = [])
    {
        $this->setTagFromArray($searchResult, null);
        parent::__construct($searchResult);
    }

    /**
     * Returns the search result as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getTag();
    }
}
