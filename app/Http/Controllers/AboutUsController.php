<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function __invoke()
    {
        return view('pages/about-us');
    }
}
