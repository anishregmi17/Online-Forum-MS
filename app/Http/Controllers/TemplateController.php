<?php

namespace App\Http\Controllers;

use App\Models\AboutForum;
use App\Models\Category;
use App\Models\footer;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
public function index(){
    $categories = Category::query()->get()->all();
    $footers = Footer::query()->get()->all();

    return view('frontend.home', compact('categories', 'footers'));
}
}

