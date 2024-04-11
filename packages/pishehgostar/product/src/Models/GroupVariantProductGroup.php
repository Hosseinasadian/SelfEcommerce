<?php

namespace Pishehgostar\Product\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GroupVariantProductGroup extends Pivot
{
    public $incrementing = true;
    public $timestamps = false;
}
