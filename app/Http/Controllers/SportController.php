<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Sport;

class SportController extends Controller
{
    public function index()
    {
        $sports = Sport::paginate(10);
        return view('admin.sports.index', ['sports' => $sports]);
    }

    public function create()
    {
        return view('admin.sports.create');
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

        Sport::create([
            'profileimage' => 'uploads/' . $profileImageName,
            'username' => $request->username,
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'uploads/' . $imageName,
        ]);

        return redirect()->route('admin.sports.index')->with('success', 'Sport created successfully.');
    }

    public function show(string $id)
    {
        try {
            $sport = Sport::findOrFail($id);
            return view('admin.sports.show', compact('sport'));
        } catch (\Exception $e) {
            return redirect()->route('admin.sports.index')->with('error', 'Sport not found.');
        }
    }

    public function edit(string $id)
    {
        try {
            $sport = Sport::findOrFail($id);
            return view('admin.sports.edit', compact('sport'));
        } catch (\Exception $e) {
            return redirect()->route('admin.sports.index')->with('error', 'Sport not found.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $sport = Sport::findOrFail($id);

            $request->validate([
                'profileimage' => 'image|mimes:png,jpg,jpeg|max:2048',
                'username' => 'required|string|min:2|max:100',
                'title' => 'required|string|min:2|max:100',
                'description' => 'required|string|min:2|max:100',
                'image' => 'image|mimes:png,jpg,jpeg|max:2048'
            ]);

            if ($request->hasFile('image')) {
                $this->deleteFile($sport->image);
                $sport->image = 'uploads/' . $this->uploadImage($request->file('image'), 'uploads');
            }

            if ($request->hasFile('profileimage')) {
                $this->deleteFile($sport->profileimage);
                $sport->profileimage = 'uploads/' . $this->uploadImage($request->file('profileimage'), 'uploads');
            }

            $sport->username = $request->username;
            $sport->title = $request->title;
            $sport->description = $request->description;
            $sport->save();

            return redirect()->route('admin.sports.index')->with('success', 'Sport updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.sports.index')->with('error', 'Sport not found.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $sport = Sport::findOrFail($id);
            $this->deleteFile($sport->image);
            $this->deleteFile($sport->profileimage);
            $sport->delete();
            return redirect()->route('admin.sports.index')->with('success', 'Sport deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.sports.index')->with('error', 'Sport not found.');
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
