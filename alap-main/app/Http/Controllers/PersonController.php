<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PersonController extends Controller
{
    public function index() 
    {
        $users=People::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'person_name' => 'required|string|max:255',
            'email' => 'required|string|max:255'
        ]);

        People::create($request->all());
        return redirect()->back()->with('success', 'Person details stored successfully! ');
        //return view('users.index');

    }
}
