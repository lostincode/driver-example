<?php

namespace App\Search;

use Illuminate\Support\Manager;

class SearchManager extends Manager
{
    /**
     * Create an instance of the database driver
     *
     * @return DatabaseSearch
     */
    protected function createDatabaseDriver()
    {
        return new DatabaseSearch;
    }

    /**
     * Create an instance of the sphinx driver
     *
     * @return DatabaseSearch
     */
    protected function createSphinxDriver()
    {
        return new SphinxSearch;
    }

    /**
     * Get the default search driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->app['config']['services.search.driver'];
    }
}
