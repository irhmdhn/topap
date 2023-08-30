<?php

namespace App\Http\Controllers;

use App\Models\PageSlideshow;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $productGames = Product::get()->where('prd_status', 'Active');
        $slideshow = PageSlideshow::get()->where('banner_status', 'active');
        return view('pages/home', [
            'productGames' => $productGames,
            'slideshow' => $slideshow,
        ]);
    }
}
