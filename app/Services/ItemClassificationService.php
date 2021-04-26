<?php

namespace App\Services;

use App\Models\ItemClassification;
use App\Repositories\CollectionRepository;

class ItemClassificationService
{
    /**
     * @var $itemClassification
     */
    protected $itemClassification;
    protected $collectionRepository;

    /**
     * ItemClassificationService constructor
     *
     * @param ItemClassification $itemClassification
     */

    public function __construct()
    {
        $this->itemClassification = new ItemClassification;
        $this->collection = new CollectionRepository;
    }

    public function delete($classification)
    {
        $this->collection->deleteCollection($classification);
    }

    public function getTrashed($classifications)
    {
        return $this->collection->getTrashedCollection($classifications);
    }

    public function restore($classifications)
    {
        $this->collection->restoreCollection($classifications);
    }
}
