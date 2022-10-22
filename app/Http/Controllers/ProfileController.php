<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;

class ProfileController extends Controller
{
    public function showForm()
    {
        return view('pages.profile');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'nullable|confirmed'
        ]);

        $user = Auth::user();

        $user->name = $request->get('name');

        if ($request->get('password')) {
            $user->password = bcrypt($request->get('password'));
        }

        $user->save();

        return back()->with('success', 'Updated');
    }
}