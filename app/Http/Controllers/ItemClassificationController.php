<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\ItemClassification;
use App\Services\ItemClassificationService;
use Illuminate\Http\Request;

class ItemClassificationController extends Controller
{
    public function __construct()
    {
        $this->itemClassificationService = new ItemClassificationService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemClassification  $itemClassification
     * @return \Illuminate\Http\Response
     */
    public function show(ItemClassification $itemClassification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemClassification  $itemClassification
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemClassification $itemClassification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemClassification  $itemClassification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemClassification $itemClassification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemClassification  $classification
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemClassification $classification)
    {
        $this->itemClassificationService->delete($classification);
    }

    public function getTrashed(Gender $gender)
    {
        $classifications = $gender->itemClassifications();
        return $this->itemClassificationService->getTrashed($classifications);
    }

    public function restore(Gender $gender)
    {
        $classifications = $gender->itemClassifications();
        $this->itemClassificationService->restore($classifications);
    }
}
