<?php
namespace App\Http\Controllers;

use App\Models\AboutForum;
use Illuminate\Http\Request;

class AboutForumController extends Controller
{
    public function index()
    {
        $aboutforums = AboutForum::paginate(10);
        return view('admin.aboutforum.index', compact('aboutforums'));
    }

    public function create()
    {
        return view('admin.aboutforum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        AboutForum::create($request->all());
        return redirect()->route('admin.aboutforum.index')->with('success', 'About Forum created successfully.');
    }

    public function show($id)
    {
        $aboutforum = AboutForum::findOrFail($id);
        return view('admin.aboutforum.show', compact('aboutforum'));
    }

    public function edit($id)
    {
        $aboutforum = AboutForum::findOrFail($id);
        return view('admin.aboutforum.edit', compact('aboutforum'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $aboutforum = AboutForum::findOrFail($id);
        $aboutforum->update($request->all());
        return redirect()->route('admin.aboutforum.index')->with('success', 'About Forum updated successfully.');
    }

    public function destroy($id)
    {
        $aboutforum = AboutForum::findOrFail($id);
        $aboutforum->delete();
        return redirect()->route('admin.aboutforum.index')->with('success', 'About Forum deleted successfully.');
    }
}
