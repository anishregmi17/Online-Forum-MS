<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform the search on the title, description, and username columns
        $results = Post::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('username', 'LIKE', "%{$query}%")
            ->get();

        return view('frontend.home', ['results' => $results, 'query' => $query]);
    }
}
