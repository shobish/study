<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CartProduct extends Model
{
    use HasFactory;
    protected $with=['product'];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class ,);
    }

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class,);
    }
}
