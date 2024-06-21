<?php
namespace App\Http\Controllers;

use App\Models\ContentPolicy;
use Illuminate\Http\Request;

class ContentPolicyController extends Controller
{
    public function index()
    {
        $contentPolicies = ContentPolicy::paginate(10);
        return view('admin.contentpolicy.index', compact('contentPolicies'));
    }

    public function create()
    {
        return view('admin.contentpolicy.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        ContentPolicy::create($request->all());
        return redirect()->route('admin.contentpolicy.index')->with('success', 'Content Policy created successfully.');
    }

    public function show($id)
    {
        $contentPolicy = ContentPolicy::findOrFail($id);
        return view('admin.contentpolicy.show', compact('contentPolicy'));
    }

    public function edit($id)
    {
        $contentPolicy = ContentPolicy::findOrFail($id);
        return view('admin.contentpolicy.edit', compact('contentPolicy'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $contentPolicy = ContentPolicy::findOrFail($id);
        $contentPolicy->update($request->all());
        return redirect()->route('admin.contentpolicy.index')->with('success', 'Content Policy updated successfully.');
    }

    public function destroy($id)
    {
        $contentPolicy = ContentPolicy::findOrFail($id);
        $contentPolicy->delete();
        return redirect()->route('admin.contentpolicy.index')->with('success', 'Content Policy deleted successfully.');
    }
}
