<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $privacypolicies = PrivacyPolicy::paginate(10);
        return view('admin.privacypolicy.index', compact('privacypolicies'));
    }

    public function create()
    {
        return view('admin.privacypolicy.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        PrivacyPolicy::create($request->all());
        return redirect()->route('admin.privacypolicy.index')->with('success', 'Privacy Policy created successfully.');
    }

    public function show($id)
    {
        $privacypolicy = PrivacyPolicy::findOrFail($id);
        return view('admin.privacypolicy.show', compact('privacypolicy'));
    }

    public function edit($id)
    {
        $privacypolicy = PrivacyPolicy::findOrFail($id);
        return view('admin.privacypolicy.edit', compact('privacypolicy'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $privacypolicy = PrivacyPolicy::findOrFail($id);
        $privacypolicy->update($request->all());
        return redirect()->route('admin.privacypolicy.index')->with('success', 'Privacy Policy updated successfully.');
    }

    public function destroy($id)
    {
        $privacypolicy = PrivacyPolicy::findOrFail($id);
        $privacypolicy->delete();
        return redirect()->route('admin.privacypolicy.index')->with('success', 'Privacy Policy deleted successfully.');
    }
}
