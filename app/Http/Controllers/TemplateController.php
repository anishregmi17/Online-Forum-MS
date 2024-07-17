<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutForum;
use App\Models\Category;
use App\Models\Community;
use App\Models\ContentPolicy;
use App\Models\Footer;
use App\Models\Post;
use App\Models\PrivacyPolicy;
use App\Models\Technology;
use App\Models\UserAgreement;
use App\Models\Popular;
use App\Models\Sport;

class TemplateController extends Controller
{
    public function popular()
    {
        $populars = Popular::all();
        $aboutforums = AboutForum::all();
        $communities = Community::all();
        $categories = Category::all();
        $footers = Footer::all();
        $posts = Post::all();
        $sports = Sport::all();
        return view('frontend.popular', compact('populars', 'aboutforums', 'sports', 'communities', 'categories', 'footers', 'posts'));
    }

    public function aboutForum()
    {
        $aboutforums = AboutForum::all();
        $communities = Community::all();
        $categories = Category::all();
        $footers = Footer::all();
        $posts = Post::all();
        $sports = Sport::all();
        return view('frontend.aboutforum', compact('aboutforums', 'sports', 'communities', 'categories', 'footers', 'posts'));
    }

    public function contentpolicy()
    {
        $contentPolicies = ContentPolicy::all();

        return view('frontend.contentpolicy', ['contentpolicies' => $contentPolicies]);
    }

    public function privacypolicy()
    {
        $privacypolicies = PrivacyPolicy::all();
        $communities = Community::all();
        $categories = Category::all();
        $footers = Footer::all();
        $posts = Post::all();
        $sports = Sport::all();
        return view('frontend.privacypolicy', compact('privacypolicies', 'sports', 'communities', 'categories', 'footers', 'posts'));
    }

    public function useragreement()
    {
        $useragreements = UserAgreement::all();
        $communities = Community::all();
        $categories = Category::all();
        $footers = Footer::all();
        $posts = Post::all();
        $sports = Sport::all();
        return view('frontend.useragreement', compact('useragreements', 'sports', 'communities', 'categories', 'footers', 'posts'));
    }


    public function technology()
    {
        $technologies = Technology::all();
        $communities = Community::all();
        $categories = Category::all();
        $footers = Footer::all();
        $posts = Post::all();
        return view('frontend.technology', compact('technologies', 'communities', 'categories', 'footers', 'posts'));
    }

    public function sports()
    {
        $sports = Sport::all();
        $communities = Community::all();
        $categories = Category::all();
        $footers = Footer::all();
        $posts = Post::all();
        return view('frontend.sports', compact('sports', 'communities', 'categories', 'footers', 'posts'));
    }

    public function home()
    {
        $communities = Community::all();
        $categories = Category::all();
        $footers = Footer::all();
        $posts = Post::all();
        $sports = Sport::all();

        return view('frontend.home', compact('categories', 'footers', 'communities', 'posts', 'sports'));
    }
}
