<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'profileimage' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'username' => 'required|string|min:2|max:100',
            'title' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:2|max:100',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $profileImageName = $this->uploadImage($request->file('profileimage'), 'uploads');
        $imageName = $this->uploadImage($request->file('image'), 'uploads');

        Post::create([
            'profileimage' => 'uploads/' . $profileImageName,
            'username' => $request->username,
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'uploads/' . $imageName,
        ]);

        return redirect()->route('home')->with('success', 'Post created successfully.');
    }

    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

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
            $this->deleteFile($post->image);
            $post->image = 'uploads/' . $this->uploadImage($request->file('image'), 'uploads');
        }

        if ($request->hasFile('profileimage')) {
            $this->deleteFile($post->profileimage);
            $post->profileimage = 'uploads/' . $this->uploadImage($request->file('profileimage'), 'uploads');
        }

        $post->username = $request->username;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $this->deleteFile($post->image);
        $this->deleteFile($post->profileimage);
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }

    private function uploadImage($image, $path)
    {
        $imageName = md5($image->getClientOriginalName() . time()) . '.' . $image->extension();
        $image->move(public_path($path), $imageName);
        return $imageName;
    }

    private function deleteFile($filePath)
    {
        if (File::exists(public_path($filePath))) {
            File::delete(public_path($filePath));
        }
    }
}
