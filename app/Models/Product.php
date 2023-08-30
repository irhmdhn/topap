<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function items()
    {
        return $this->hasMany(ProductPrice::class, 'prd_id', 'prd_id');
    }
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
