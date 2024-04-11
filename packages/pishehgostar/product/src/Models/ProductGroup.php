<?php

namespace Pishehgostar\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductGroup extends Model
{
    use HasFactory;

    public function variants():BelongsToMany
    {
        return $this->belongsToMany(GroupVariant::class)->using(GroupVariantProductGroup::class);
    }

}
