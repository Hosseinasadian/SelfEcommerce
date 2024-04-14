<?php

namespace Pishehgostar\Product\Controllers\Admin;

use App\Http\Controllers\Controller;
use Pishehgostar\Product\Models\GroupVariant;
use Pishehgostar\Product\Models\GroupVariantValue;
use Pishehgostar\Product\Models\ProductGroup;
use Pishehgostar\Product\Requests\Admin\GroupVariant\AddValueRequest;
use Pishehgostar\Product\Requests\Admin\GroupVariant\StoreRequest;
use Pishehgostar\Product\Requests\Admin\GroupVariant\UpdateRequest;
use Pishehgostar\Product\Requests\Admin\GroupVariant\UpdateValueRequest;
use Pishehgostar\Product\Resources\Admin\GroupVariant\DetailsResource;
use Pishehgostar\Product\Resources\Admin\GroupVariant\ListResource;

class GroupVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupVariant = GroupVariant::query()->get();
        return ListResource::collection($groupVariant);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $groupVariant = GroupVariant::query()->create($data);
        return new ListResource($groupVariant);
    }

    /**
     * Display the specified resource.
     */
    public function show(GroupVariant $groupVariant)
    {
        $groupVariant->load('values');
        return new ListResource($groupVariant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, GroupVariant $groupVariant)
    {
        $data = $request->validated();
        $groupVariant->update($data);
        return new ListResource($groupVariant);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GroupVariant $groupVariant)
    {
        // todo add group variant destroy method implementation
    }

    public function addValue(AddValueRequest $request, GroupVariant $groupVariant)
    {
        $data = $request->validated();
        $groupVariant->values()->create($data);
        $groupVariant->load('values');
        return new DetailsResource($groupVariant);
    }

    public function updateValue(UpdateValueRequest $request, GroupVariant $groupVariant, GroupVariantValue $value)
    {
        $data = $request->validated();
        $value->update($data);
        $groupVariant->load('values');
        return new DetailsResource($groupVariant);
    }
}
