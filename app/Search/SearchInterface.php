<?php

namespace App\Search;

interface SearchInterface
{
    /**
     * Query for search results
     *
     * @param String $input
     *
     * @return Illuminate\Support\Collection
     */
    public function query($input);
}
