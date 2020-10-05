<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('_room');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if(Room::create($input))
        {
            return redirect()->back()->with('success', 'Database Saved');
        }else{
            return redirect()->back()->with('error', 'Something error');
        }
    }

}
