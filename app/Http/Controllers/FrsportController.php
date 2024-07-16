<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrsportController extends Controller
{
    public function sportscreate()
    {
        return view('sportscreate'); // Make sure you have a 'posts.create' view
    }
}
