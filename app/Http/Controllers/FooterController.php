<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::all();
        return view('admin.footers.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Footer::create($request->only('title'));

        return redirect()->route('admin.footers.index')
                         ->with('success', 'Footer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $footer = Footer::findOrFail($id);
        return view('admin.footers.show', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $footer = Footer::findOrFail($id);
        return view('admin.footers.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $footer = Footer::findOrFail($id);
        $footer->update($request->only('title'));

        return redirect()->route('admin.footers.index')
                         ->with('success', 'Footer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();

        return redirect()->route('admin.footers.index')
                         ->with('success', 'Footer deleted successfully.');
    }
}
