<?php

namespace App\Services;

use App\Models\Gender;
use App\Repositories\CollectionRepository;

class GenderService
{
    /**
     * @var $gender
     */
    protected $gender;
    protected $collectionRepository;

    /**
     * GenderService constructor
     *
     * @param Gender $gender
     */

    public function __construct()
    {
        $this->gender = new Gender;
        $this->collection = new CollectionRepository;
    }

    /**
     * Get all gender
     *
     * @return Collection
     */
    public function getAll()
    {
        return $this->gender->with('itemClassifications', 'itemClassifications.types', 'itemClassifications.types.items')->get();
    }

    public function delete($gender)
    {
        $this->collection->deleteCollection($gender);
    }

    public function restore()
    {
        $this->collection->restoreCollection($this->gender);
    }
}
