<?php

namespace App\Search;

class DatabaseSearch implements SearchInterface
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
        // Encapsulate database implementation here...
        return collect(['Results from Database reporting for duty!']);
    }
}
