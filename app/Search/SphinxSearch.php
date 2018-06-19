<?php

namespace App\Search;

class SphinxSearch implements SearchInterface
{
    /**
     * Query for search results
     *
     * @param String $input
     *
     * @return Illuminate\Support\Collection
     */
    public function query($input)
    {
        // Encapsulate sphinx implementation here...
        return collect(['Results from Sphinx reporting for duty!']);
    }
}
