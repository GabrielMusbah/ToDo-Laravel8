<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email', 'password'), $request->get('remember_me', false))){
            return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'A credencial informada nao bate com os nosso dados.',
        ])->withInput();
    }

}