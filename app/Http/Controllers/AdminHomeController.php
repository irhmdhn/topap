<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\Transaction;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index()
    {
        $tsCount = Transaction::first();
        $transaction = Transaction::all();
        $cust = Customer::first();
        $produk = Product::all();
        $item = ProductPrice::first();
        return view('admin/admin_dashboard', [
            'title' => 'Dashboard',
            'tsCount' => $tsCount,
            'cust' => $cust,
            'produk' => $produk,
            'item' => $item,
            'transaction' => $transaction,
        ]);
    }
}