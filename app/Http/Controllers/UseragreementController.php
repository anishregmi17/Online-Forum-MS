<?php
namespace App\Http\Controllers;

use App\Models\UserAgreement;
use Illuminate\Http\Request;

class UserAgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $useragreements = UserAgreement::paginate(10);
        return view('admin.useragreements.index', compact('useragreements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.useragreements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        UserAgreement::create($request->all());

        return redirect()->route('admin.useragreements.index')->with('success', 'User Agreement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAgreement $useragreement)
    {
        return view('admin.useragreements.show', compact('useragreement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserAgreement $useragreement)
    {
        return view('admin.useragreements.edit', compact('useragreement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserAgreement $useragreement)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $useragreement->update($request->all());

        return redirect()->route('admin.useragreements.index')->with('success', 'User Agreement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAgreement $useragreement)
    {
        $useragreement->delete();

        return redirect()->route('admin.useragreements.index')->with('success', 'User Agreement deleted successfully.');
    }
}
