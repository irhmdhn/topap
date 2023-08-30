<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSettingsController extends Controller
{
    public function index()
    {
        return view('admin/admin_set-slideshow', ['title' => 'Settings']);
    }
}
