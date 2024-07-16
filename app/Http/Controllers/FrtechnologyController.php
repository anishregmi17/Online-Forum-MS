<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrtechnologyController extends Controller
{
    public function create()
    {
        return view('technology'); // Make sure you have a 'posts.create' view
    }
}
