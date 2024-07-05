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
    public function aboutForum()
    {
        $aboutforums = AboutForum::all();
        return view('frontend.aboutforum', ['aboutforums' => $aboutforums]);
    }

    public function home()
    {
        $communities = Community::all();
        $categories = Category::all();
        $footers = Footer::all();
        $posts = Post::all();
        return view('frontend.home', compact('categories', 'footers', 'communities', 'posts'));
    }
}
