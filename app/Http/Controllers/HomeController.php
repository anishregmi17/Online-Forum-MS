<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index'); // Adjust this as necessary
    }

    public function documentation()
    {
        return view('admin.documentation');
    }
}
