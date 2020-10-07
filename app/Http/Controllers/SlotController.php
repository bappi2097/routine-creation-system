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
        $this->validate($request, [
            'title' => ['required', 'string', 'max:1'],
            'start' => ['required', 'string'],
            'end' => ['required', 'string'],
        ]);

        if (Slot::updateOrCreate(['title' => $request->title], ['start' => $request->start, 'end' => $request->end])) {
            return redirect()->back()->with('success', 'Successfully slot saved');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
