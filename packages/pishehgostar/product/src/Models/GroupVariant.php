<?php

namespace Pishehgostar\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GroupVariant extends Model
{
    use HasFactory;

    public function values(): HasMany
    {
        return $this->hasMany(GroupVariantValue::class);
    }
}
