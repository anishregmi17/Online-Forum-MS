<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'site_key' => 'required|string|max:255|unique:settings',
            'site_value' => 'required|string|max:255',
        ]);

        Setting::create($request->all());

        return redirect()->route('admin.settings.index')
                         ->with('success', 'Setting created successfully.');
    }

    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.show', compact('setting'));
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'site_key' => 'required|string|max:255|unique:settings,site_key,' . $id,
            'site_value' => 'required|string|max:255',
        ]);

        $setting = Setting::findOrFail($id);
        $setting->update($request->all());

        return redirect()->route('admin.settings.index')
                         ->with('success', 'Setting updated successfully.');
    }

    public function destroy($id)
    {
        $setting = Setting::findOrFail($id);
        $setting->delete();

        return redirect()->route('admin.settings.index')
                         ->with('success', 'Setting deleted successfully.');
    }
}
