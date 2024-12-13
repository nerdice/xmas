<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftType;
use App\Models\Gift;

class GiftController extends Controller
{
    public function index()
    {
        $gifts=Gift::all();
        return view('gifts.index', compact('gifts'));
    }

    public function create()
    {
        $gift_types = GiftType::all();
        return view('gifts.create', compact('gift_types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gift_name' => 'required|string|max:255',
            'price' => 'required|integer|max:255',
            'gift_type_id' => 'integer|max:255' // ITT AZERT NINCS REQUIRED MERT EZEKET NEM SIKERULT FELRAKNI AZ ADATBAISBA
            // 'gift_type_id' => 'required|integer|max:255' LENNE HELYESEN
        ]);

        return redirect()->back()->with('success', 'Gift details stored successfully! ');
    }
}
