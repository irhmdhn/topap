<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPrice extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'prd_id', 'prd_id');
        return $this->hasOne(Transaction::class);
    }
}
