<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PriceListController extends Controller
{
    public function index()
    {
        $products = Product::with('items')->get();
        return view('pages/pricelist', [
            'products' => $products,
        ]);
    }
}
