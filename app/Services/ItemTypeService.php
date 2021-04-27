<?php

namespace App\Services;

use App\Models\ItemType;
use App\Repositories\CollectionRepository;

class ItemTypeService
{
    /**
     * @var $itemType
     */
    protected $itemType;
    protected $collectionRepository;

    /**
     * ItemTypeService constructor
     *
     * @param ItemType $itemType
     */

    public function __construct()
    {
        $this->itemType = new ItemType;
        $this->collection = new CollectionRepository;
    }

    public function delete($type)
    {
        $this->collection->deleteCollection($type);
    }
}
