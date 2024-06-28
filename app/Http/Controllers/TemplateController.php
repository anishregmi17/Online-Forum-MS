<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        // $posts = Post::query()->get()->all();
       // $communities = Community::query()->get()->all();
    //   $about_forums = aboutforum::query()->get()->all();
        $categories = Category::query()->get()->all();
        return view('frontend.home', compact('categories'));
    }
}

