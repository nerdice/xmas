<?php

namespace App\Http\Controllers;

use App\Models\GiftType;
use Illuminate\Http\Request;

class GiftTypeController extends Controller
{
    public function index() 
    {
        return view('gift_types.index');
    }

    public function create() 
    {
        return view('gift_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type_name' => 'required|string|max:255'
        ]);

        GiftType::create($request->all());
        //return redirect()->back()->with('success', 'okeka');
        return view('gift_types.index');
    }
}
