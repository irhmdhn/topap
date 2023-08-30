<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['cust_email', 'cust_gameid', 'cust_phone'];
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
