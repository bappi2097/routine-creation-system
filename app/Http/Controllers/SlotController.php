<?php

namespace App\Http\Controllers;
use App\Models\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function index()
    {
        return view('_slot');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if(Slot::updateOrCreate($input))
        {
            return redirect()->back()->with('success', 'Database Saved');
        }else{
            return redirect()->back()->with('error', 'Something error');
        }
    }

}