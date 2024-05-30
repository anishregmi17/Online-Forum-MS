<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->paginate(2);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'profileimage' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'username' => 'required|string|min:2|max:100',
            'title' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:2|max:100',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $profileImageName = md5($request->profileimage->getClientOriginalName() . time()) . '.' . $request->profileimage->extension();
        $request->profileimage->move(public_path('uploads'), $profileImageName);

        $imageName = md5($request->image->getClientOriginalName() . time()) . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $post = new Post;
        $post->profileimage = 'uploads/' . $profileImageName;
        $post->username = $request->username;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = 'uploads/' . $imageName;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'profileimage' => 'image|mimes:png,jpg,jpeg|max:2048',
            'username' => 'required|string|min:2|max:100',
            'title' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:2|max:100',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            File::delete(public_path($post->image));
            $imageName = md5($request->image->getClientOriginalName() . time()) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $post->image = 'uploads/' . $imageName;
        }

        if ($request->hasFile('profileimage')) {
            File::delete(public_path($post->profileimage));
            $profileImageName = md5($request->profileimage->getClientOriginalName() . time()) . '.' . $request->profileimage->extension();
            $request->profileimage->move(public_path('uploads'), $profileImageName);
            $post->profileimage = 'uploads/' . $profileImageName;
        }

        $post->username = $request->username;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        File::delete(public_path($post->image));
        File::delete(public_path($post->profileimage));
        $post->delete();
        return redirect()->route('posts.index');
    }
}
