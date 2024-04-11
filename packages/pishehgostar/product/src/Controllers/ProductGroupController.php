<?php

namespace Pishehgostar\Product\Controllers;

use App\Http\Controllers\Controller;
use Pishehgostar\Product\Models\ProductGroup;
use Pishehgostar\Product\Requests\Admin\ProductGroup\StoreRequest;
use Pishehgostar\Product\Requests\Admin\ProductGroup\UpdateRequest;
use Pishehgostar\Product\Resources\Admin\ProductGroup\DetailsResource;
use Pishehgostar\Product\Resources\Admin\ProductGroup\ListResource;

class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_groups = ProductGroup::query()->get();
        return ListResource::collection($product_groups);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $product_group = ProductGroup::query()->create($data);
        return new ListResource($product_group);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductGroup $productGroup)
    {
        return new DetailsResource($productGroup);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, ProductGroup $productGroup)
    {
        $data = $request->validated();
        $productGroup->update($data);
        return new DetailsResource($productGroup);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductGroup $productGroup)
    {
        // todo add product group destroy method implementation
    }
}
