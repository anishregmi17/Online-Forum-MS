<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found.');
        }

        // Validate request data
        $request->validate([
            'title' => 'required|string|max:150',
            'description' => 'required|string|max:150',
            'username' => 'required|string|max:150',
            'profileimage' => 'required|string|max:150',
            'image' => 'requzired|string|max:150',
        ]);

        // Update post attributes
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->username = $request->input('username');
        $post->profileimage = $request->input('profileimage');
        $post->image = $request->input('image');

        // Save changes to the database
        $post->save();

        return redirect()->route('posts.show', $id)->with('success', 'Post updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catagory $catagory)
    {
        //
    }
}
