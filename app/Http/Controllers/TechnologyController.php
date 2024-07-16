<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::paginate(10);
        return view('admin.technologies.index', ['technologies' => $technologies]);
    }

    public function create()
    {
        return view('admin.technologies.create');
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

        Technology::create([
            'profileimage' => 'uploads/' . $profileImageName,
            'username' => $request->username,
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'uploads/' . $imageName,
        ]);

        return redirect()->route('home')->with('success', 'Technology created successfully.');
    }

    public function show(string $id)
    {
        try {
            $technology = Technology::findOrFail($id);
            return view('admin.technologies.show', compact('technology'));
        } catch (\Exception $e) {
            return redirect()->route('admin.technologies.index')->with('error', 'Technology not found.');
        }
    }

    public function edit(string $id)
    {
        try {
            $technology = Technology::findOrFail($id);
            return view('admin.technologies.edit', compact('technology'));
        } catch (\Exception $e) {
            return redirect()->route('admin.technologies.index')->with('error', 'Technology not found.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $technology = Technology::findOrFail($id);

            $request->validate([
                'profileimage' => 'image|mimes:png,jpg,jpeg|max:2048',
                'username' => 'required|string|min:2|max:100',
                'title' => 'required|string|min:2|max:100',
                'description' => 'required|string|min:2|max:100',
                'image' => 'image|mimes:png,jpg,jpeg|max:2048'
            ]);

            if ($request->hasFile('image')) {
                $this->deleteFile($technology->image);
                $technology->image = 'uploads/' . $this->uploadImage($request->file('image'), 'uploads');
            }

            if ($request->hasFile('profileimage')) {
                $this->deleteFile($technology->profileimage);
                $technology->profileimage = 'uploads/' . $this->uploadImage($request->file('profileimage'), 'uploads');
            }

            $technology->username = $request->username;
            $technology->title = $request->title;
            $technology->description = $request->description;
            $technology->save();

            return redirect()->route('admin.technologies.index')->with('success', 'Technology updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.technologies.index')->with('error', 'Technology not found.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $technology = Technology::findOrFail($id);
            $this->deleteFile($technology->image);
            $this->deleteFile($technology->profileimage);
            $technology->delete();
            return redirect()->route('admin.technologies.index')->with('success', 'Technology deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.technologies.index')->with('error', 'Technology not found.');
        }
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
