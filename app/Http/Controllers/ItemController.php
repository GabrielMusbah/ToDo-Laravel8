<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Item;

class ItemController extends Controller
{
    public function showForm()
    {

        return view('pages.add');

    }

    public function addItem(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|min:3'
        ]);

        $data = $request->only('description');
        $data['user_id'] = Auth::user()->id;

        Item::create($data);

        return redirect()
            ->route('home')
            ->with('success', 'Created');
    }

    public function remove(Item $item)
    {
        if ($item->user_id != auth()->user()->id) {
            abort(404);
        }

        $item->delete();

        return redirect()->route('home')->with('success', 'Removed');;
    }

}

