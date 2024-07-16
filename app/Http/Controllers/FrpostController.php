<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrpostController extends Controller
{
    public function create()
    {
        return view('create'); // Make sure you have a 'posts.create' view
    }
}
