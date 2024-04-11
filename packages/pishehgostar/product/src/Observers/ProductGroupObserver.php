<?php

namespace Pishehgostar\Product\Observers;


use Illuminate\Support\Str;
use Pishehgostar\Product\Models\ProductGroup;

class ProductGroupObserver
{
    public function creating(ProductGroup $productGroup): void
    {
        $productGroup->code = Str::random(8);
    }
}
