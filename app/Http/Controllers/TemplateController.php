<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function technologies()
    {
        $technologies = Technology::all();
        return view('frontend.technologies', ['technologies' => $technologies]);
    }

        public function popular()
    {
        $populars = Popular::all();
        return view('frontend.popular', ['populars' => $populars]);
    }

    public function aboutForum()
    {
        $aboutforums = AboutForum::all();
        return view('frontend.aboutforum', ['aboutforums' => $aboutforums]);
    }

    public function contentpolicy()
    {
        $contentPolicies = ContentPolicy::all();
        return view('frontend.contentpolicy', ['contentpolicies' => $contentPolicies]);
    }

    public function privacypolicy()
    {
        $privacypolicies = PrivacyPolicy::all();
        return view('frontend.privacypolicy', ['privacypolicies' => $privacypolicies]);
    }

    public function useragreement()
    {
        $useragreements = UserAgreement::all();
        return view('frontend.useragreement', ['useragreements' => $useragreements]);
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
