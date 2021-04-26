<?php

namespace App\Repositories;

use App\Models\Gender;

class CollectionRepository
{
    /**
     * Delete Collection
     *
     * @return null
     */
    public function deleteCollection($collection)
    {
        $collection->delete();
    }

    public function getTrashedCollection($collection)
    {
        return $collection->withTrashed()->get();
    }

    public function restoreCollection($collection)
    {
        $collection->withTrashed()->restore();
    }
}
