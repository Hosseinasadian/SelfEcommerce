<?php

namespace Pishehgostar\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed|string $code
 */
class GroupVariant extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function values(): HasMany
    {
        return $this->hasMany(GroupVariantValue::class);
    }
}
