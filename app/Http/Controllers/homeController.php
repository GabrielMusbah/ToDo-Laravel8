<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Item;

class HomeController extends Controller
{
   public function show()
   {

      $itens = Auth::user()->itens;

      return view('pages.home', compact('itens'));

   } 

   public function logout(Request $request)
   {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
   }
}