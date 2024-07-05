<?php

namespace App\Http\Controllers;

use App\Models\Popular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PopularController extends Controller
{
    public function index()
    {
        $populars = Popular::paginate(10);
        return view('admin.populars.index', ['populars' => $populars]);
    }

    public function create()
    {
        return view('admin.populars.create');
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

        Popular::create([
            'profileimage' => 'uploads/' . $profileImageName,
            'username' => $request->username,
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'uploads/' . $imageName,
        ]);

        return redirect()->route('admin.populars.index')->with('success', 'Popular item created successfully.');
    }

    public function show(string $id)
    {
        $popular = Popular::findOrFail($id);
        return view('admin.populars.show', compact('popular'));
    }

    public function edit(string $id)
    {
        $popular = Popular::findOrFail($id);
        return view('admin.populars.edit', compact('popular'));
    }

    public function update(Request $request, string $id)
    {
        $popular = Popular::findOrFail($id);

        $request->validate([
            'profileimage' => 'image|mimes:png,jpg,jpeg|max:2048',
            'username' => 'required|string|min:2|max:100',
            'title' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:2|max:100',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $this->deleteFile($popular->image);
            $popular->image = 'uploads/' . $this->uploadImage($request->file('image'), 'uploads');
        }

        if ($request->hasFile('profileimage')) {
            $this->deleteFile($popular->profileimage);
            $popular->profileimage = 'uploads/' . $this->uploadImage($request->file('profileimage'), 'uploads');
        }

        $popular->username = $request->username;
        $popular->title = $request->title;
        $popular->description = $request->description;
        $popular->save();

        return redirect()->route('admin.populars.index')->with('success', 'Popular item updated successfully.');
    }

    public function destroy(string $id)
    {
        $popular = Popular::findOrFail($id);
        $this->deleteFile($popular->image);
        $this->deleteFile($popular->profileimage);
        $popular->delete();
        return redirect()->route('admin.populars.index')->with('success', 'Popular item deleted successfully.');
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
