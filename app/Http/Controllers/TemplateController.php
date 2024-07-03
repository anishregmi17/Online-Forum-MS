<?php

namespace App\Http\Controllers;
use App\Models\AboutForum;
use App\Models\Category;
use App\Models\Community;
use App\Models\Footer;
use App\Models\Post;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $communities = Community::query()->get();
        $categories = Category::query()->get();
        $footers = Footer::query()->get();
        $posts = Post::query()->get();

        return view('frontend.home', compact('categories', 'footers', 'communities', 'posts'));
    }
}
