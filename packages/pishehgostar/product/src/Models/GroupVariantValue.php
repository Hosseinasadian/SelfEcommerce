<?php

namespace Pishehgostar\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed|string $code
 */
class GroupVariantValue extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function variant():BelongsTo
    {
        return $this->belongsTo(GroupVariant::class);
    }
}
