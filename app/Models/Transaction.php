<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['prd_id', 'prd_prc_id', 'ts_code', 'cust_id', 'updated_at', 'ts_status'];

    public function tCustomer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function tProduct()
    {
        return $this->belongsTo(Product::class);
    }
    public function tProductPrice()
    {
        return $this->belongsTo(ProductPrice::class);
    }
    public function transaction()
    {
        return $this
            ->join('customers', 'transactions.cust_id', '=', 'customers.cust_id')
            ->join('products', 'transactions.prd_id', '=', 'products.prd_id')
            ->join('product_prices', 'transactions.prd_prc_id', '=', 'product_prices.prd_prc_id')
            ->select(
                'transactions.ts_code',
                'transactions.ts_method',
                'transactions.ts_status',
                'transactions.created_at',
                'customers.cust_email',
                'customers.cust_phone',
                'customers.cust_gameid',
                'products.prd_name',
                'products.prd_item_name',
                'product_prices.prd_prc_vol',
                'product_prices.prd_prc',
            )
            ->get();
    }
    public function tsCountStatus($status)
    {
        return $this
            ->select('product_prices.prd_prc')
            ->where('ts_status', $status)
            ->join('product_prices', 'transactions.prd_prc_id', '=', 'product_prices.prd_prc_id')
            ->get();
    }
    public function confirm($tsCode)
    {
        return $this
            ->where('ts_code', $tsCode)
            ->join('customers', 'transactions.cust_id', '=', 'customers.cust_id')
            ->join('products', 'transactions.prd_id', '=', 'products.prd_id')
            ->join('product_prices', 'transactions.prd_prc_id', '=', 'product_prices.prd_prc_id')
            ->select(
                'transactions.ts_code',
                'transactions.ts_method',
                'transactions.ts_status',
                'transactions.created_at',
                'customers.cust_gameid',
                'products.prd_name',
                'products.prd_img',
                'products.prd_item_name',
                'product_prices.prd_prc_vol',
                'product_prices.prd_prc',
            )
            ->get()->first();
    }
}
