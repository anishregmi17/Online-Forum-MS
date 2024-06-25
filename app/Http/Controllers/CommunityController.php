<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;

class CommunityController extends Controller
{
    public function index()
    {
        $communities = Community::all();
        return view('admin.communities.index', compact('communities'));
    }

    public function create()
    {
        return view('admin.communities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        Community::create($request->all());

        return redirect()->route('admin.communities.index')
                         ->with('success', 'Community created successfully.');
    }

    public function show($id)
    {
        $community = Community::findOrFail($id);
        return view('admin.communities.show', compact('community'));
    }

    public function edit($id)
    {
        $community = Community::findOrFail($id);
        return view('admin.communities.edit', compact('community'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        $community = Community::findOrFail($id);
        $community->update($request->all());

        return redirect()->route('admin.communities.index')
                         ->with('success', 'Community updated successfully.');
    }

    public function destroy($id)
    {
        $community = Community::findOrFail($id);
        $community->delete();

        return redirect()->route('admin.communities.index')
                         ->with('success', 'Community deleted successfully.');
    }
}
