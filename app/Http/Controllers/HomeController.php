<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function documentation()
    {
        return view('admin.documentation');
    }
}
