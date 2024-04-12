<?php

namespace Pishehgostar\Product\Observers;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Pishehgostar\Product\Models\GroupVariant;
use Pishehgostar\Product\Models\GroupVariantValue;

class GroupVariantValueObserver
{
    public function creating(GroupVariantValue $groupVariantValue): void
    {
        $groupVariantId = $groupVariantValue->group_variant_id;
        $groupVariant = GroupVariant::query()->findOrFail($groupVariantId);
        $code_prefix ='';
        if ($groupVariant){
            $code_prefix = $groupVariant->code . '_';
        }
        $groupVariantValue->code = $code_prefix . Str::random(6);
    }
}
