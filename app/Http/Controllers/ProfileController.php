<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_restoran' => 'required',
            'alamat_restoran' => 'required',
            'telepon_restoran' => 'required',
        ]);

        Profile::create($request->all());
        return redirect()->route('profiles.index')->with('success', 'Profile created successfully.');
    }

    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'nama_restoran' => 'required',
            'alamat_restoran' => 'required',
            'telepon_restoran' => 'required',
        ]);

        $profile->update($request->all());
        return redirect()->route('profiles.index')->with('success', 'Profile updated successfully.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('success', 'Profile deleted successfully.');
    }
}
