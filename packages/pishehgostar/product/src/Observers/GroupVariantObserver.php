<?php

namespace Pishehgostar\Product\Observers;


use Illuminate\Support\Str;
use Pishehgostar\Product\Models\GroupVariant;

class GroupVariantObserver
{
    public function creating(GroupVariant $groupVariant): void
    {
        $groupVariant->code = Str::random(6);
    }
}
